<?php
session_start();
include_once("../business/DB.php");

// For test payments we want to enable the sandbox mode. If you want to put live
// payments through then this setting needs changing to `false`.
$enableSandbox = true;

$email='';
$return_url='';
$cancel_url='';
$notify_url='';

$sql = "select * from `paymentsettings` limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if($row["PaypalStandardSandbox"] === "1")
        {
            $enableSandbox = true;

            if(isset($row["SandboxEmail"]) && trim($row["SandboxEmail"]) != "")
                $email = $row["SandboxEmail"];
            else
                $email = 'sb-eqbwi697310@business.example.com';

            if(isset($row["SandboxReturnUrl"]) && trim($row["SandboxReturnUrl"]) != "")
                $return_url = $row["SandboxReturnUrl"];
            else
                $return_url = 'http://localhost:8080/seoservices/paypalstandardcheckout/success.php';

            if(isset($row["SandboxCancelUrl"]) && trim($row["SandboxCancelUrl"]) != "")
                $cancel_url = $row["SandboxCancelUrl"];
            else
                $cancel_url = 'http://localhost:8080/seoservices/paypalstandardcheckout/cancel.php';

            if(isset($row["SandboxNotifyUrl"]) && trim($row["SandboxNotifyUrl"]) != "")
                $notify_url = $row["SandboxNotifyUrl"];
            else
                $notify_url = 'http://localhost:8080/seoservices/paypalstandardcheckout/ipn.php';
        }
        else
        {
            $enableSandbox = false;

            if(isset($row["LiveEmail"]) && trim($row["LiveEmail"]) != "")
                $email = $row["LiveEmail"];
            else
                $email = 'musibihakhatoonrazmi@gmail.com';

            if(isset($row["LiveReturnUrl"]) && trim($row["LiveReturnUrl"]) != "")
                $return_url = $row["LiveReturnUrl"];
            else
                $return_url = 'https://www.seotechstore.com/paypalstandardcheckout/success.php';

            if(isset($row["LiveCancelUrl"]) && trim($row["LiveCancelUrl"]) != "")
                $cancel_url = $row["LiveCancelUrl"];
            else
                $cancel_url = 'https://www.seotechstore.com/paypalstandardcheckout/cancel.php';

            if(isset($row["LiveNotifyUrl"]) && trim($row["LiveNotifyUrl"]) != "")
                $notify_url = $row["LiveNotifyUrl"];
            else
                $notify_url = 'https://www.seotechstore.com/paypalstandardcheckout/ipn.php';
        }
    }
}
// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
// $paypalConfig = [
//     'email' => 'threads.ahsan@gmail.com',//'email' => 'sb-eqbwi697310@business.example.com',//'musibihakhatoonrazmi@gmail.com',//'threads.ahsan@gmail.com',
//     'return_url' => 'http://localhost:8080/seoservices/paypalstandardcheckout/success.php',
//     'cancel_url' => 'http://localhost:8080/seoservices/paypalstandardcheckout/cancel.php',
//     'notify_url' => 'http://localhost:8080/seoservices/paypalstandardcheckout/ipn.php'
// ];

$paypalConfig = [
    'email' => $email,//'email' => 'sb-eqbwi697310@business.example.com',//'musibihakhatoonrazmi@gmail.com',//'threads.ahsan@gmail.com',
    'return_url' => $return_url,
    'cancel_url' => $cancel_url,
    'notify_url' => $notify_url
];

$paypalUrl = $enableSandbox ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';

// Product being purchased.
//$itemName = 'Test Item';
//$itemAmount = 5.00;

// Include Functions
//require 'functions.php';

if(isset($_SESSION["SavedTransactionRecord"]))
    unset($_SESSION["SavedTransactionRecord"]);

// Check if paypal request or response
if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])) {

    // Grab the post data so that we can set up the query string for PayPal.
    // Ideally we'd use a whitelist here to check nothing is being injected into
    // our post data.
    $data = [];
    foreach ($_POST as $key => $value) {
        $data[$key] = stripslashes($value);
    }

    // Set the PayPal account.
    $data['business'] = $paypalConfig['email'];

    $data['cmd'] = '_cart';
    $data['upload'] = '1';

    //$data["custom"] = $_SESSION["userid"]."|".$_POST["Cart_IDs"]."|".$_POST["Payment_Amount"];
    $data["custom"] = $_POST["Cart_IDs"]."|".$_SESSION["userid"]."|".$_POST["Payment_Amount"]."|".date('d-M-yy h:i:sa');
    // Set the PayPal return addresses.
    $data['return'] = stripslashes($paypalConfig['return_url'].'?cartids='.$_POST["Cart_IDs"].'&userid='.$_SESSION["userid"].'&carttotal='.$_POST["Payment_Amount"].'&transactionDate'.date('d-M-yy h:i:sa'));
    $data['cancel_return'] = stripslashes($paypalConfig['cancel_url'].'?cartids='.$_POST["Cart_IDs"].'&userid='.$_SESSION["userid"].'&carttotal='.$_POST["Payment_Amount"].'&transactionDate'.date('d-M-yy h:i:sa'));
    //$data['notify_url'] = stripslashes($paypalConfig['notify_url'].'?cartids='.$_POST["Cart_IDs"].'&userid='.$_SESSION["userid"].'&carttotal='.$_POST["Payment_Amount"].'&transactionDate'.date('d-M-yy h:i:sa'));
    $data['notify_url'] = stripslashes($paypalConfig['notify_url']);

    // Set the details about the product being purchased, including the amount
    // and currency so that these aren't overridden by the form data.
    $item = 1;
    //Fetch products from the database
    $cart_check_query = "SELECT *,(select Service_Name from services where Service_ID=Cart.Service_ID) as 'Service_Name', (select Service_Price from services where Service_ID=Cart.Service_ID) as 'Service_Price', (Select Category_Name from category where Category_ID = (SELECT Category_ID FROM `services` WHERE Service_ID=Cart.Service_ID)) as 'Category_Name' FROM `cart` where User_ID='". $_SESSION["userid"] ."'";
    $result = mysqli_query($conn, $cart_check_query);
    //$results = $db->query("SELECT *,(select Service_Name from services where Service_ID=Cart.Service_ID) as 'Service_Name', (select Service_Price from services where Service_ID=Cart.Service_ID) as 'Service_Price', (Select Category_Name from category where Category_ID = (SELECT Category_ID FROM `services` WHERE Service_ID=Cart.Service_ID)) as 'Category_Name' FROM `cart` where User_ID='" . $_SESSION["userid"] . "'");
    while($row = $result->fetch_assoc()){
        $data['item_name_'.$item] = $row['Service_Name'];
        $data['amount_'.$item] = $row['Service_Price'];
        $item++;
    }
    $data['currency_code'] = 'USD';

    // Add any custom fields for the query string.
    //$data['custom'] = USERID;

    // Build the query string from the data.
    $queryString = http_build_query($data);

    // Redirect to paypal IPN
    header('location:' . $paypalUrl . '?' . $queryString);
    exit();

} else {
    // Handle the PayPal response.
}

?>