<?php 

//echo 'ipn called';
file_put_contents('ipn_dump_Post.txt', print_r($_POST, true));
file_put_contents('ipn_dump_Get.txt', print_r($_GET, true));
file_put_contents('ipn_dump_Request.txt', print_r($_REQUEST, true));

// Include configuration file 
//include_once 'config.php'; 
 
// Include database connection file 
//include_once 'dbConnect.php'; 
include_once("../business/DB.php");
 
/* 
 * Read POST data 
 * reading posted data directly from $_POST causes serialization 
 * issues with array data in POST. 
 * Reading raw POST data from input stream instead. 
 */         
$raw_post_data = file_get_contents('php://input'); 
$raw_post_array = explode('&', $raw_post_data); 
$myPost = array(); 
foreach ($raw_post_array as $keyval) { 
    $keyval = explode ('=', $keyval); 
    if (count($keyval) == 2) 
        $myPost[$keyval[0]] = urldecode($keyval[1]); 
} 
 
// Read the post from PayPal system and add 'cmd' 
$req = 'cmd=_notify-validate'; 
if(function_exists('get_magic_quotes_gpc')) { 
    $get_magic_quotes_exists = true; 
} 
foreach ($myPost as $key => $value) { 
    if($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) { 
        $value = urlencode(stripslashes($value)); 
    } else { 
        $value = urlencode($value); 
    } 
    $req .= "&$key=$value"; 
} 
 
/* 
 * Post IPN data back to PayPal to validate the IPN data is genuine 
 * Without this step anyone can fake IPN data 
 */ 

/** Production Postback URL */
const VERIFY_URI = 'https://ipnpb.paypal.com/cgi-bin/webscr';
/** Sandbox Postback URL */
const SANDBOX_VERIFY_URI = 'https://ipnpb.sandbox.paypal.com/cgi-bin/webscr';

//$paypalURL = SANDBOX_VERIFY_URI; 
$paypalURL = '';

$sql = "select * from `paymentsettings` limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if($row["PaypalStandardSandbox"] === "1")
            $paypalURL = SANDBOX_VERIFY_URI;
        else
            $paypalURL = VERIFY_URI;
    }
}

$ch = curl_init($paypalURL); 
if ($ch == FALSE) { 
    return FALSE; 
} 
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $req); 
curl_setopt($ch, CURLOPT_SSLVERSION, 6); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); 
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1); 
 
// Set TCP timeout to 30 seconds 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close', 'User-Agent: company-name')); 
$res = curl_exec($ch); 
 
/* 
 * Inspect IPN validation result and act accordingly 
 * Split response headers and payload, a better way for strcmp 
 */  
$tokens = explode("\r\n\r\n", trim($res)); 
$res = trim(end($tokens)); 
if (strcmp($res, "VERIFIED") == 0 || strcasecmp($res, "VERIFIED") == 0) { 
     
    // Retrieve transaction info from PayPal 
    $item_number    = $_POST['item_number']; 
    $txn_id         = $_POST['txn_id']; 
    $payment_gross     = $_POST['mc_gross']; 
    $currency_code     = $_POST['mc_currency']; 
    $payment_status = $_POST['payment_status']; 
     
    //$my_own_txn_id = $_GET['cartids'].'|'.$_GET['userid'].'|'.$_GET['transactionDate'];
    if(isset($_REQUEST['custom']))
    {
        $parts = explode("|", $_REQUEST['custom']);

        $cartids = $parts[0];
        $userid = $parts[1];
        $carttotal = $parts[2];
        $transactionDate = $parts[3];

        $my_own_txn_id = $cartids."|".$userid."|".$transactionDate;

        // Check if transaction data exists with the same TXN ID 
        $prevPayment = $conn->query("SELECT Paypal_Token FROM `paypaltransaction` where Paypal_Token = '".$txn_id."' or Paypal_Token = '".$my_own_txn_id."'"); 
        if($prevPayment->num_rows > 0){ 

            //Insert Data from Cart To Order Table
            $query = "SELECT *,(select Service_Name from services where Service_ID=cart.Service_ID) as 'Service_Name', (select Service_Price from services where Service_ID=cart.Service_ID) as 'Service_Price', (Select Category_Name from category where Category_ID = (SELECT Category_ID FROM `services` WHERE Service_ID=cart.Service_ID)) as 'Category_Name' FROM `cart` where cart_id in (".$cartids.") and User_ID='".$userid."'";
    		$productResult = $conn->query($query); //"SELECT * FROM cart WHERE cart_id in (".$item_number.")"
    		//$productRow = $productResult->fetch_assoc(); 
    
            if ($productResult->num_rows > 0) {
                while ($row = $productResult->fetch_assoc()) {
                    $sql4 = "INSERT INTO `orders`(`Service_ID`, `User_ID`, `Order_Price`, `Payment_ID`, `Payment_Method`, `Order_Date`, `filePath`, `Order_Status`) VALUES ('".$row["Service_ID"]."','".$row["User_ID"]."','".$row["Service_Price"]."','".$txn_id."','PayPal',NOW(),'".$row["filePath"]."','".$payment_status."')";
                    $result4 = $conn->query($sql4);
    
                    $sql5 = "Delete From cart where Cart_ID in (".$cartids.")";
                    $result5 = $conn->query($sql5);
                }
            }
            //Insert Data from Cart To Order Table

            $sql2 = "Update paypaltransaction set Transaction_Status = '".$payment_status."', Paypal_Token = '".$my_own_txn_id."' where Paypal_Token = '".$txn_id."' or Paypal_Token = '".$my_own_txn_id."'";
            $result2 = $conn->query($sql2);
            //exit(); 
        }else{ 

            //Insert Data from Cart To Order Table
            $query = "SELECT *,(select Service_Name from services where Service_ID=cart.Service_ID) as 'Service_Name', (select Service_Price from services where Service_ID=cart.Service_ID) as 'Service_Price', (Select Category_Name from category where Category_ID = (SELECT Category_ID FROM `services` WHERE Service_ID=cart.Service_ID)) as 'Category_Name' FROM `cart` where cart_id in (".$cartids.") and User_ID='".$userid."'";
    		$productResult = $conn->query($query); //"SELECT * FROM cart WHERE cart_id in (".$item_number.")"
    		//$productRow = $productResult->fetch_assoc(); 
    
            if ($productResult->num_rows > 0) {
                while ($row = $productResult->fetch_assoc()) {
                    $sql4 = "INSERT INTO `orders`(`Service_ID`, `User_ID`, `Order_Price`, `Payment_ID`, `Payment_Method`, `Order_Date`, `filePath`, `Order_Status`) VALUES ('".$row["Service_ID"]."','".$row["User_ID"]."','".$row["Service_Price"]."','".$txn_id."','PayPal',NOW(),'".$row["filePath"]."','".$payment_status."')";
                    $result4 = $conn->query($sql4);
    
                    $sql5 = "Delete From cart where Cart_ID in (".$cartids.")";
                    $result5 = $conn->query($sql5);
                }
            }
            //Insert Data from Cart To Order Table

            //$userid = $_GET['userid'];
            // Insert transaction data into the database 
            //$insert = $conn->query("INSERT INTO payments(item_number,txn_id,payment_gross,currency_code,payment_status) VALUES('".$item_number."','".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')"); 
            $insert = $conn->query("INSERT INTO `paypaltransaction`(`Paypal_Token`, `Cart_IDs`, `User_ID`, `Transaction_Status`, `Date`) VALUES ('".$txn_id."','".$item_number."','".$userid."','".$payment_status."',NOW())");
            $payment_id = $conn->insert_id;
        } 
    }
} 
?>