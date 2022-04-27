<?php
session_start();
include_once('../business/DB.php');

if(isset($_POST["btnCheckout"]) && $_POST["btnCheckout"] === "checkout" && isset($_POST["Cart_IDs"]) && isset($_POST["Payment_Amount"]))
{
	require_once ("paypalfunctions.php");
	// ==================================
	// PayPal Express Checkout Module
	// ==================================

	//'------------------------------------
	//' The paymentAmount is the total value of 
	//' the shopping cart, that was set 
	//' earlier in a session variable 
	//' by the shopping cart page
	//'------------------------------------

	$paymentAmount = $_POST["Payment_Amount"];
	//$paymentAmount = $_SESSION["Payment_Amount"];
	$_SESSION["Payment_Amount"] = $paymentAmount;

	//'------------------------------------
	//' The currencyCodeType and paymentType 
	//' are set to the selections made on the Integration Assistant 
	//'------------------------------------
	$currencyCodeType = "USD";
	$paymentType = "Sale";

	//'------------------------------------
	//' The returnURL is the location where buyers return to when a
	//' payment has been succesfully authorized.
	//'
	//' This is set to the value entered on the Integration Assistant 
	//'------------------------------------
	$returnURL = "http://localhost:8080/seoservices/paypalexpresss/review.php";

	//'------------------------------------
	//' The cancelURL is the location buyers are sent to when they hit the
	//' cancel button during authorization of payment during the PayPal flow
	//'
	//' This is set to the value entered on the Integration Assistant 
	//'------------------------------------
	$cancelURL = "http://localhost:8080/seoservices/index.php";

	$sql = "select * from `paymentsettings` limit 1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			if($row["PaypalExpressSandbox"] === "1")
			{
				if(isset($row["ExpressSandboxReturnUrl"]) && trim($row["ExpressSandboxReturnUrl"]) != "")
					$returnURL = $row["ExpressSandboxReturnUrl"];
				else
					$returnURL = 'http://localhost:8080/seoservices/paypalexpresss/review.php';

				if(isset($row["ExpressSandboxCancelUrl"]) && trim($row["ExpressSandboxCancelUrl"]) != "")
					$cancelURL = $row["ExpressSandboxCancelUrl"];
				else
					$cancelURL = 'http://localhost:8080/seoservices/index.php';
			}
			else
			{
				if(isset($row["ExpressLiveReturnUrl"]) && trim($row["ExpressLiveReturnUrl"]) != "")
					$returnURL = $row["ExpressLiveReturnUrl"];
				else
					$returnURL = 'http://localhost:8080/seoservices/paypalexpresss/review.php';

				if(isset($row["ExpressLiveCancelUrl"]) && trim($row["ExpressLiveCancelUrl"]) != "")
					$cancelURL = $row["ExpressLiveCancelUrl"];
				else
					$cancelURL = 'http://localhost:8080/seoservices/index.php';
			}
		}
	}

	//'------------------------------------
	//' Calls the SetExpressCheckout API call
	//'
	//' The CallShortcutExpressCheckout function is defined in the file PayPalFunctions.php,
	//' it is included at the top of this file.
	//'-------------------------------------------------
	$resArray = CallShortcutExpressCheckout ($paymentAmount, $currencyCodeType, $paymentType, $returnURL, $cancelURL);

	$ack = strtoupper($resArray["ACK"]);
	if($ack=="SUCCESS" || $ack=="SUCCESSWITHWARNING")
	{
		//Insert Data in PaypalTransaction Table for temporary usage and validation
		$query = "INSERT INTO `paypaltransaction`(`Paypal_Token`, `Cart_IDs`, `User_ID`, `Transaction_Status`, `Date`) VALUES ('".$resArray["TOKEN"]."','".$_POST["Cart_IDs"]."','".$_SESSION["userid"]."','',NOW())";
		mysqli_query($conn, $query);
		//Insert Data in PaypalTransaction Table for temporary usage and validation
		RedirectToPayPal ( $resArray["TOKEN"] );
	} 
	else  
	{
		//Display a user friendly Error on the page using any of the following error information returned by PayPal
		$ErrorCode = urldecode($resArray["L_ERRORCODE0"]);
		$ErrorShortMsg = urldecode($resArray["L_SHORTMESSAGE0"]);
		$ErrorLongMsg = urldecode($resArray["L_LONGMESSAGE0"]);
		$ErrorSeverityCode = urldecode($resArray["L_SEVERITYCODE0"]);
		
		echo "SetExpressCheckout API call failed. ";
		echo "Detailed Error Message: " . $ErrorLongMsg;
		echo "Short Error Message: " . $ErrorShortMsg;
		echo "Error Code: " . $ErrorCode;
		echo "Error Severity Code: " . $ErrorSeverityCode;
	}
}
else{
	header('location: '.$_SERVER["HTTP_REFERER"]);
}
?>
