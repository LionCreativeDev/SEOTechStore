<?php
session_start();
include_once('DB.php');
//$_SESSION["userid"]=1;

function AddToCart($pid, $pname, $conn)
{
    $currentDir = getcwd();
    $currentDir = str_replace('\\business','\\',$currentDir);
    $uploadDirectory = "\\uploads\\";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['doc','docx','txt']; // Get all the file extensions

    $fileName = $_FILES['upDescription']['name'];
    $fileSize = $_FILES['upDescription']['size'];
    $fileTmpName  = $_FILES['upDescription']['tmp_name'];
    //$fileType = $_FILES['upDescription']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));
    $filenameOnly = str_replace('.'.$fileExtension,'',$fileName);
    //$uploadPath = $currentDir . $uploadDirectory . basename($fileName); 

    $newfilename = $pname.'-'.$filenameOnly.'-'.$_SESSION["userid"].'-'.date("Y-m-d").'.'.$fileExtension;
    $uploadPath = $currentDir . $uploadDirectory . basename($newfilename); 

    if (isset($_FILES['upDescription'])) {
        
        $cart_check_query = "SELECT * FROM Cart WHERE Service_ID='".$pid."' and User_ID='".$_SESSION["userid"]."' and filepath='".$uploadPath."' LIMIT 1";
        $result = mysqli_query($conn, $cart_check_query);
        $item = mysqli_fetch_assoc($result);

        if ($item) { // if item exists
            array_push($errors, "Item already exists");
            $_SESSION["Item_Exists"] = true;
        }

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a doc,docx or txt file";
        }

        if ($fileSize > 1000000) {
            $errors[] = "This file is more than 1MB. Sorry, it has to be less than or equal to 1MB";
        }

        if (empty($errors)) {
            if (!file_exists($uploadPath) && !isset($_SESSION["Item_Exists"])) {
                //echo "The file $newfilename not exists";
                $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

                if ($didUpload) {
                    $query = "INSERT INTO cart(Service_ID, User_ID, filePath, Date) VALUES ('".$pid."','".$_SESSION["userid"]."','".$uploadPath."',NOW());";
                    mysqli_query($conn, $query);
                    $_SESSION["Item_Exists"] = false;                    

                    //echo "The file " . basename($newfilename) . " has been uploaded";
                } else {
                    //echo "An error occurred somewhere. Try again or contact the admin";
                }
            }else if(file_exists($uploadPath))
            {
                $_SESSION["Item_Exists"] = true;
            }
            else if(isset($_SESSION["Item_Exists"]))
            {
                $_SESSION["Item_Exists"] = true;
            }
        } else {
            // foreach ($errors as $error) {
            //     echo $error . "These are the errors" . "\n";
            // }
        }
    }
    header('location: '.$_SERVER["HTTP_REFERER"]);
    // $errors=[];
    // $cart_check_query = "SELECT * FROM Cart WHERE Service_ID='".$pid."' and User_ID='".$_SESSION["userid"]."' LIMIT 1";
	// $result = mysqli_query($conn, $cart_check_query);
	// $item = mysqli_fetch_assoc($result);
	
	// if ($item) { // if item exists
    //     array_push($errors, "Item already exists");
    //     $_SESSION["Item_Exists"] = true;
    // }
    
    // if (count($errors) == 0) {
    //     $query = "INSERT INTO cart(Service_ID, User_ID, Date) VALUES ('".$pid."','".$_SESSION["userid"]."',NOW());";
    //     mysqli_query($conn, $query);
    //     $_SESSION["Item_Exists"] = false;
    // }

    // header('location: '.$_SERVER["HTTP_REFERER"]);
}

function RemoveFromCart($pid, $conn)
{
    $cart_check_query = "SELECT * FROM Cart WHERE Service_ID='".$pid."' and User_ID='".$_SESSION["userid"]."' LIMIT 1";
	$result = mysqli_query($conn, $cart_check_query);
    $item = mysqli_fetch_assoc($result);

    if ($item) { // if item exists
        $query = "Delete FROM Cart WHERE Service_ID='".$pid."' and User_ID='".$_SESSION["userid"]."'";
        mysqli_query($conn, $query);
        $_SESSION["Item_Deleted"] = true;
    }

    header('location: '.$_SERVER["HTTP_REFERER"]);
}

function subscribefortips($tipemail, $conn)
{
    $subscribtion_check_query = "SELECT * FROM subscribefortips WHERE SubscribeForTips_Email like '".$tipemail."' LIMIT 1";
	$result = mysqli_query($conn, $subscribtion_check_query);
    $item = mysqli_fetch_assoc($result);

    if ($item) // if item exists
    { 
        $_SESSION["SubscriptionMessageType"] = "info";
        $_SESSION["SubscriptionMessage"] = "You Have Already Subscribed For Latest SEO Tips";
    }
    else
    {
        $query = "INSERT INTO `subscribefortips`(`SubscribeForTips_Email`, `SubscribeForTips_Status`, `SubscribeForTips_Date`) VALUES ('".$tipemail."','false',NOW());";
        mysqli_query($conn, $query);
        
        $_SESSION["SubscriptionMessageType"] = "success";
        $_SESSION["SubscriptionMessage"] = "Thanks For Subscribing Latest SEO Tips";
    }

    header('location: '.$_SERVER["HTTP_REFERER"]);
}

function SendEmail($to, $from, $subject, $message)
{
    try {
        $To = $to;
        $Subject = $subject;
        
        $Message = $message;
        
        $header = "From:".$from." \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        
        $retval = mail ($To,$Subject,$Message,$header);
        
        if( $retval == true ) {
            //echo "Message sent successfully...";
            $_SESSION["ContactUsMessageType"] = "success";
            $_SESSION["ContactUsMessage"] = "Message Sent Successfully";
        }else {
            //echo "Message could not be sent...";
            $_SESSION["ContactUsMessageType"] = "info";
            $_SESSION["ContactUsMessage"] = "Message could not be sent... Please Try Later";
        }
    }
    catch(Exception $e) {
        // Turn off all error reporting
        error_reporting(0);
        ini_set("display_errors", 0);

        //echo 'Message: ' .$e->getMessage();
        $_SESSION["ContactUsMessageType"] = "info";
        $_SESSION["ContactUsMessage"] = "Message could not be sent... Please Try Later";
        
        header('location: contacts.php');
    }
}

function ContactUs($to, $messagefromclient)
{
    $adminemail = 'threadshahzeel@gmail.com';
    $adminsubject = 'You have recieved a new message from client';
    $adminmessage = $messagefromclient;
    SendEmail($adminemail, "support@seoservices.com", $adminsubject, $adminmessage);//send email to admin

    $clientemail = $to;
    $clientsubject = 'Thanks You From SeoServices';
    $clientmessage = 'Thank you for writing to us.<br/><br/>Our Customer Sales Representative will get in touch with you shortly.<br/><br/>Regards,<br/><br/> SeoServices Team';
    SendEmail($clientemail, "support@seoservices.com", $clientsubject, $clientmessage);//send email to client

    header('location: contacts.php');
}

function GetMetaKeywords($page)
{
    echo "<meta name='keywords' content='this is a test keywords' />";
}

if(isset($_SERVER["HTTP_REFERER"]))
{
    if(isset($_POST['action']) && isset($_POST['Service_ID']) && isset($_POST['txtservice']) && $_POST['action'] === 'AddToCart' && isset($_SESSION["userid"]))
    {
        //echo 'Item Added';
        $pid = mysqli_real_escape_string($conn, $_POST['Service_ID']);
        $pname = mysqli_real_escape_string($conn, $_POST['txtservice']);
        AddToCart($pid, $pname, $conn);
    }
    else if(isset($_GET['action']) && $_GET['action'] === 'RemoveFromCart')
    {
        //echo 'Item Removed';
        $pid = mysqli_real_escape_string($conn, $_GET['Service_ID']);
        RemoveFromCart($pid, $conn);
    }
    else if(isset($_GET['action']) && $_GET['action'] === "Logout")
    {
        $helper = array_keys($_SESSION);
        foreach ($helper as $key){
            unset($_SESSION[$key]);
        }
        header('location: ../index.php');
    }
    else if(isset($_POST['action']) && $_POST['action'] === 'tip')
    {
        $tipemail = mysqli_real_escape_string($conn, $_POST['tipemail']);        
        subscribefortips($tipemail, $conn);
    }
    else if(isset($_POST['action']) && $_POST['action'] === 'contactusmessage' && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
    {
        ContactUs($_POST['email'], $_POST['message']);
    }
    else{
        echo 'Something Wrong';
    }
}
else{
   header('location: ../index.php');
}

?>