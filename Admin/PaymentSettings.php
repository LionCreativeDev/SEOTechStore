<?php
session_start();
//$_SESSION["userid"] = 1; //for testing
//$_SESSION['username'] = "Admin";
//$_SESSION["role"] = "Admin";

if (!isset($_SESSION["userid"]) && !isset($_SESSION["role"])) {
	if (isset($_SERVER["HTTP_REFERER"])) {
		header("location: " . $_SERVER["HTTP_REFERER"]);
    }
    else{
        header("location: ../index.php");
    }
}
elseif($_SESSION["role"] !== 'Admin' && $_SESSION["role"] !== 'Super Admin')
{
    header("location: ../index.php");
}

// $enablepaypalstandardbutton = false;
// $enablepaypalexpressbutton = false;

// $paypalstandardsandbox = false;
// $paypalexpresssandbox = false;

// include_once('../business/DB.php');
// $sql = "select * from `paymentsettings` limit 1";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         if($row["EnablePaypalStandard"] === "1")
//             $enablepaypalstandardbutton = true;

//         if($row["EnablePaypalExpress"] === "1")
//             $enablepaypalexpressbutton = true;

//         if($row["PaypalStandardSandbox"] === "1")
//             $paypalstandardsandbox = true;

//         if($row["PaypalExpressSandbox"] === "1")
//             $paypalexpresssandbox = true;
//     }
// }
$message1 = "";
$message2 = "";

if(isset($_POST["btnPaypalStandard"]))
{
    include_once('../business/DB.php');
    if(!isset($_POST["chkPaypalStandardSandbox"]))
    {
        //For Live
        //echo 'Live';
        $errors=[];
        $txtLiveEmail = mysqli_real_escape_string($conn, strtolower($_POST['txtLiveEmail']));
        $txtLiveReturnUrl = mysqli_real_escape_string($conn, $_POST['txtLiveReturnUrl']);
        $txtLiveCancelUrl = mysqli_real_escape_string($conn, strtolower($_POST['txtLiveCancelUrl']));
        $txtLiveNotifyUrl = mysqli_real_escape_string($conn, $_POST['txtLiveNotifyUrl']);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($txtLiveEmail)) { array_push($errors, "Paypal Standard Live Email is required"); }
        if (empty($txtLiveReturnUrl)) { array_push($errors, "Paypal Standard Live Return Url is required"); }
        if (empty($txtLiveCancelUrl)) { array_push($errors, "Paypal Standard Live Cancel Url is required"); }
        if (empty($txtLiveNotifyUrl)) { array_push($errors, "Paypal Standard Live Notify Url (IPN) is required"); }

        if(isset($_POST["chkEnablePaypalStandard"]))
            $EnablePaypalStandard = '1';
        else
            $EnablePaypalStandard = '0';

        $PaypalStandardSandbox = '0';

        if (count($errors) == 0) {
            $query = "UPDATE `paymentsettings` SET `PaypalStandardSandbox`='$PaypalStandardSandbox',`EnablePaypalStandard`='$EnablePaypalStandard',`LiveEmail`='$txtLiveEmail',`LiveReturnUrl`='$txtLiveReturnUrl',`LiveCancelUrl`='$txtLiveCancelUrl',`LiveNotifyUrl`='$txtLiveNotifyUrl'";
            mysqli_query($conn, $query);

            $query = "SELECT * FROM paymentsettings WHERE LiveEmail = '".$txtLiveEmail."' and LiveReturnUrl = '".$txtLiveReturnUrl."' limit 1;";
            $result = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($result) >= 1)//You are mixing the mysql and mysqli, change this line of code
            {
                $message1 = '<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-ok-sign"></i><strong>Well done!</strong> Paypal Standard Live Settings Updated Successfully. </div>';
            }
        }
        else
        {
            $message1 = '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-ban-circle"></i><strong>Sorry!</strong> '.$error.'. </div>';
        }
    }
    else
    {
        //For Sendbox
        //echo 'Sendbox';
        $errors=[];
        $txtSandboxEmail = mysqli_real_escape_string($conn, strtolower($_POST['txtSandboxEmail']));
        $txtSandboxReturnUrl = mysqli_real_escape_string($conn, $_POST['txtSandboxReturnUrl']);
        $txtSandboxCancelUrl = mysqli_real_escape_string($conn, strtolower($_POST['txtSandboxCancelUrl']));
        $txtSandboxNotifyUrl = mysqli_real_escape_string($conn, $_POST['txtSandboxNotifyUrl']);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($txtSandboxEmail)) { array_push($errors, "Paypal Standard Sandbox Email is required"); }
        if (empty($txtSandboxReturnUrl)) { array_push($errors, "Paypal Standard Sandbox Return Url is required"); }
        if (empty($txtSandboxCancelUrl)) { array_push($errors, "Paypal Standard Sandbox Cancel Url is required"); }
        if (empty($txtSandboxNotifyUrl)) { array_push($errors, "Paypal Standard Sandbox Notify Url (IPN) is required"); }

        if(isset($_POST["chkEnablePaypalStandard"]))
            $EnablePaypalStandard = '1';
        else
            $EnablePaypalStandard = '0';

        $PaypalStandardSandbox = '1';

        if (count($errors) == 0) {
            $query = "UPDATE `paymentsettings` SET `PaypalStandardSandbox`='$PaypalStandardSandbox',`EnablePaypalStandard`='$EnablePaypalStandard',`SandboxEmail`='$txtSandboxEmail',`SandboxReturnUrl`='$txtSandboxReturnUrl',`SandboxCancelUrl`='$txtSandboxCancelUrl',`SandboxNotifyUrl`='$txtSandboxNotifyUrl'";
            mysqli_query($conn, $query);

            $query = "SELECT * FROM paymentsettings WHERE SandboxEmail = '".$txtSandboxEmail."' and SandboxReturnUrl = '".$txtSandboxReturnUrl."' limit 1;";
            $result = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($result) >= 1)//You are mixing the mysql and mysqli, change this line of code
            {
                $message1 = '<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-ok-sign"></i><strong>Well done!</strong> Paypal Standard Sandbox Settings Updated Successfully. </div>';
            }
        }
        else
        {
            $message1 = '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-ban-circle"></i><strong>Sorry!</strong> '.$error.'. </div>';
        }
    }
}
elseif(isset($_POST["btnPaypalExpress"]))
{
    include_once('../business/DB.php');
    if(!isset($_POST["chkPaypalExpressSandbox"]))
    {
        //For Live
        //echo 'Live';
        $errors=[];
        $txtExpressLiveApiEmail = mysqli_real_escape_string($conn, strtolower($_POST['txtExpressLiveApiEmail']));
        $txtExpressLiveApiPassword = mysqli_real_escape_string($conn, $_POST['txtExpressLiveApiPassword']);
        $txtExpressLiveApiSignature = mysqli_real_escape_string($conn, strtolower($_POST['txtExpressLiveApiSignature']));
        $txtExpressLiveReturnUrl = mysqli_real_escape_string($conn, $_POST['txtExpressLiveReturnUrl']);
        $txtExpressLiveCancelUrl = mysqli_real_escape_string($conn, $_POST['txtExpressLiveCancelUrl']);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($txtExpressLiveApiEmail)) { array_push($errors, "Paypal Express Live Api Email is required"); }
        if (empty($txtExpressLiveApiPassword)) { array_push($errors, "Paypal Express Live Api Password Url is required"); }
        if (empty($txtExpressLiveApiSignature)) { array_push($errors, "Paypal Express Live Api Signature Url is required"); }
        if (empty($txtExpressLiveReturnUrl)) { array_push($errors, "Paypal Express Live Api Return Url is required"); }
        if (empty($txtExpressLiveCancelUrl)) { array_push($errors, "Paypal Express Live Api Cancel Url is required"); }

        if(isset($_POST["chkEnablePaypalExpress"]))
            $EnablePaypalExpress = '1';
        else
            $EnablePaypalExpress = '0';

        $PaypalExpressSandbox = '0';

        if (count($errors) == 0) {
            $query = "UPDATE `paymentsettings` SET `PaypalExpressSandbox`='$PaypalExpressSandbox',`EnablePaypalExpress`='$EnablePaypalExpress',`ExpressLiveApiEmail`='$txtExpressLiveApiEmail',`ExpressLiveApiPassword`='$txtExpressLiveApiPassword',`ExpressLiveApiSignature`='$txtExpressLiveApiSignature',`ExpressLiveReturnUrl`='$txtExpressLiveReturnUrl',`ExpressLiveCancelUrl`='$txtExpressLiveCancelUrl'";
            mysqli_query($conn, $query);

            $query = "SELECT * FROM paymentsettings WHERE ExpressLiveApiEmail = '".$txtExpressLiveApiEmail."' and ExpressLiveApiPassword = '".$txtExpressLiveApiPassword."' limit 1;";
            $result = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($result) >= 1)//You are mixing the mysql and mysqli, change this line of code
            {
                $message2 = '<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-ok-sign"></i><strong>Well done!</strong> Paypal Express Live Settings Updated Successfully. </div>';
            }
        }
        else
        {
            $message2 = '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-ban-circle"></i><strong>Sorry!</strong> '.$error.'. </div>';
        }
    }
    else
    {
        //For Sendbox
        //echo 'Sendbox';
        $errors=[];
        $txtExpressSandboxApiEmail = mysqli_real_escape_string($conn, strtolower($_POST['txtExpressSandboxApiEmail']));
        $txtExpressSandboxApiPassword = mysqli_real_escape_string($conn, $_POST['txtExpressSandboxApiPassword']);
        $txtExpressSandboxApiSignature = mysqli_real_escape_string($conn, strtolower($_POST['txtExpressSandboxApiSignature']));
        $txtExpressSandboxReturnUrl = mysqli_real_escape_string($conn, $_POST['txtExpressSandboxReturnUrl']);
        $txtExpressSandboxCancelUrl = mysqli_real_escape_string($conn, $_POST['txtExpressSandboxCancelUrl']);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($txtExpressSandboxApiEmail)) { array_push($errors, "Paypal Express Sandbox Api Email is required"); }
        if (empty($txtExpressSandboxApiPassword)) { array_push($errors, "Paypal Express Sandbox Api Password Url is required"); }
        if (empty($txtExpressSandboxApiSignature)) { array_push($errors, "Paypal Express Sandbox Api Signature Url is required"); }
        if (empty($txtExpressSandboxReturnUrl)) { array_push($errors, "Paypal Express Sandbox Api Return Url is required"); }
        if (empty($txtExpressSandboxCancelUrl)) { array_push($errors, "Paypal Express Sandbox Api Cancel Url is required"); }

        if(isset($_POST["chkEnablePaypalExpress"]))
            $EnablePaypalExpress = '1';
        else
            $EnablePaypalExpress = '0';

        $PaypalExpressSandbox = '1';

        if (count($errors) == 0) {
            $query = "UPDATE `paymentsettings` SET `PaypalExpressSandbox`='$PaypalExpressSandbox',`EnablePaypalExpress`='$EnablePaypalExpress',`ExpressSandboxApiEmail`='$txtExpressSandboxApiEmail',`ExpressSandboxApiPassword`='$txtExpressSandboxApiPassword',`ExpressSandboxApiSignature`='$txtExpressSandboxApiSignature',`ExpressSandboxReturnUrl`='$txtExpressSandboxReturnUrl',`ExpressSandboxCancelUrl`='$txtExpressSandboxCancelUrl'";
            mysqli_query($conn, $query);

            $query = "SELECT * FROM paymentsettings WHERE ExpressSandboxApiEmail = '".$txtExpressSandboxApiEmail."' and ExpressSandboxApiPassword = '".$txtExpressSandboxApiPassword."' limit 1;";
            $result = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($result) >= 1)//You are mixing the mysql and mysqli, change this line of code
            {
                $message2 = '<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-ok-sign"></i><strong>Well done!</strong> Paypal Express Sandbox Settings Updated Successfully. </div>';
            }
        }
        else
        {
            $message2 = '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-ban-circle"></i><strong>Sorry!</strong> '.$error.'. </div>';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en" class="app">

<head>
    <meta charset="utf-8" />
    <title>SeoTechServices</title>
    <!-- <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="icon" href="images/logo@2x.png">

    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <link rel="stylesheet" href="js/datatables/datatables.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>
<body class="">
    <section class="vbox">
        <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
            <div class="navbar-header aside-md dk">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
                <a href="dashboard.php" class="navbar-brand"> <img src="images/logo@2x.png" class="m-r-sm" alt="scale"> <!--<span class="hidden-nav-xs">Scale</span>--> </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a>
            </div>
            <!-- <ul class="nav navbar-nav hidden-xs">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="i i-grid"></i> </a>
                    <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
                        <div class="row m-l-none m-r-none m-t m-b text-center">
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-mail i-2x text-primary-lt"></i> </span> <small class="text-muted">Mailbox</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-calendar i-2x text-danger-lt"></i> </span> <small class="text-muted">Calendar</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-map i-2x text-success-lt"></i> </span> <small class="text-muted">Map</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-paperplane i-2x text-info-lt"></i> </span> <small class="text-muted">Trainning</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-images i-2x text-muted"></i> </span> <small class="text-muted">Photos</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-clock i-2x text-warning-lter"></i> </span> <small class="text-muted">Timeline</small> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </li>
            </ul> -->
            <!-- <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-btn"> <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button> </span>
                        <input type="text" class="form-control input-sm no-border" placeholder="Search apps, projects...">
                    </div>
                </div>
            </form> -->
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
                <!-- <li class="hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="i i-chat3"></i> <span class="badge badge-sm up bg-danger count">2</span> </a>
                    <section class="dropdown-menu aside-xl animated flipInY">
                        <section class="panel bg-white">
                            <div class="panel-heading b-light bg-light">
                                <strong>You have <span class="count">2</span> notifications</strong>
                            </div>
                            <div class="list-group list-group-alt">
                                <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <img src="images/a0.png" alt="..." class="img-circle"> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br> <small class="text-muted">10 minutes ago</small> </span> </a>
                                <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">1 hour ago</small> </span> </a>
                            </div>
                            <div class="panel-footer text-sm">
                                <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                                <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                            </div>
                        </section>
                    </section>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/a0.png" alt="..."> </span> <?php echo $_SESSION['username']; ?> <b class="caret"></b> </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <!-- <li>
                            <span class="arrow top"></span>
                            <a href="#">Settings</a>
                        </li> -->
                        <li>
                            <a href="profile.html">Profile</a>
                        </li>
                        <!-- <li>
                            <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a>
                        </li>
                        <li>
                            <a href="docs.html">Help</a>
                        </li> -->
                        <li class="divider"></li>
                        <li>
                            <a href="../business/functions.php?action=Logout">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <section>
            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                    <section class="vbox">
                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                <div class="clearfix wrapper dk nav-user hidden-xs">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="images/a0.png" class="dker" alt="..."> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt"><?php echo $_SESSION['username']; ?></strong> <b class="caret"></b> </span> <!--<span class="text-muted text-xs block">Art Director</span>--> </span> </a>
                                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                            <!-- <li>
                                                <span class="arrow top hidden-nav-xs"></span>
                                                <a href="#">Settings</a>
                                            </li> -->
                                            <li>
                                                <a href="profile.html">Profile</a>
                                            </li>
                                            <!-- <li>
                                                <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a>
                                            </li>
                                            <li>
                                                <a href="docs.html">Help</a>
                                            </li> -->
                                            <li class="divider"></li>
                                            <li>
                                                <a href="../business/functions.php?action=Logout">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                                    <ul class="nav nav-main" data-ride="collapse">
                                        <li>
                                            <a href="dashboard.php" class="auto"> <i class="fa fa-dashboard icon"> </i> <span class="font-bold">Dashboard</span> </a>
                                        </li>
                                        <li>
                                            <a href="users.php" class="auto"> <i class="i i-users2 icon"> </i> <span class="font-bold">Users</span> </a>
                                        </li>
                                        <li>
                                            <a href="clients.php" class="auto"> <i class="i i-users2 icon"> </i> <span class="font-bold">Clients</span> </a>
                                        </li>
                                        <li>
                                            <a href="order.php" class="auto"> <i class="i i-stack icon"> </i> <span class="font-bold">Orders</span> </a>
                                        </li>
                                        <li>
                                            <a href="visitors.php" class="auto"> <i class="i i-bars icon"> </i> <span class="font-bold">Visitors</span> </a>
                                        </li>
                                        <li>
                                            <a href="tipssubscriber.php" class="auto"> <i class="i i-mail icon"> </i> <span class="font-bold">Tips Subscriber</span> </a>
                                        </li>                                        
                                        <li>
                                            <a href="meta.php" class="auto"> <i class="i i-plus icon"> </i> <span class="font-bold">Meta Keywords</span> </a>
                                        </li>
                                        <li class="active">
                                            <a href="paymentsettings.php" class="auto"> <i class="fa fa-money icon"> </i> <span class="font-bold">Payment Settings</span> </a>
                                        </li>
                                        <!-- <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circledown text"></i> </span> <i class="i i-users2 icon"> </i> <span class="font-bold">Users</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="users.ph" class="auto"> <i class="i i-dot"></i> <span>User</span> </a>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <!-- <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <b class="badge bg-danger pull-right">4</b> <i class="i i-stack icon"> </i> <span class="font-bold">Layouts</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="layout-color.html" class="auto"> <i class="i i-dot"></i> <span>Color option</span> </a>
                                                </li>
                                                <li>
                                                    <a href="layout-hbox.html" class="auto"> <i class="i i-dot"></i> <span>Hbox layout</span> </a>
                                                </li>
                                                <li>
                                                    <a href="layout-boxed.html" class="auto"> <i class="i i-dot"></i> <span>Boxed layout</span> </a>
                                                </li>
                                                <li>
                                                    <a href="layout-fluid.html" class="auto"> <i class="i i-dot"></i> <span>Fluid layout</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-lab icon"> </i> <span class="font-bold">UI kit</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="buttons.html" class="auto"> <i class="i i-dot"></i> <span>Buttons</span> </a>
                                                </li>
                                                <li>
                                                    <a href="icons.html" class="auto"> <b class="badge bg-info pull-right">3</b> <i class="i i-dot"></i> <span>Icons</span> </a>
                                                </li>
                                                <li>
                                                    <a href="grid.html" class="auto"> <i class="i i-dot"></i> <span>Grid</span> </a>
                                                </li>
                                                <li>
                                                    <a href="widgets.html" class="auto"> <b class="badge bg-dark pull-right">8</b> <i class="i i-dot"></i> <span>Widgets</span> </a>
                                                </li>
                                                <li>
                                                    <a href="components.html" class="auto"> <i class="i i-dot"></i> <span>Components</span> </a>
                                                </li>
                                                <li>
                                                    <a href="list.html" class="auto"> <i class="i i-dot"></i> <span>List group</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#table" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-dot"></i> <span>Table</span> </a>
                                                    <ul class="nav dker">
                                                        <li>
                                                            <a href="table-static.html"> <i class="i i-dot"></i> <span>Table static</span> </a>
                                                        </li>
                                                        <li>
                                                            <a href="table-datatable.html"> <b class="label bg-dark pull-right">1.10</b> <i class="i i-dot"></i> <span>Datatable</span> </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#form" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-dot"></i> <span>Form</span> </a>
                                                    <ul class="nav dker">
                                                        <li>
                                                            <a href="form-elements.html"> <i class="i i-dot"></i> <span>Form elements</span> </a>
                                                        </li>
                                                        <li>
                                                            <a href="form-validation.html"> <i class="i i-dot"></i> <span>Form validation</span> </a>
                                                        </li>
                                                        <li>
                                                            <a href="form-wizard.html"> <i class="i i-dot"></i> <span>Form wizard</span> </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="chart.html" class="auto"> <i class="i i-dot"></i> <span>Chart</span> </a>
                                                </li>
                                                <li>
                                                    <a href="portlet.html" class="auto"> <i class="i i-dot"></i> <span>Portlet</span> </a>
                                                </li>
                                                <li>
                                                    <a href="timeline.html" class="auto"> <i class="i i-dot"></i> <span>Timeline</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-docs icon"> </i> <span class="font-bold">Pages</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="profile.html" class="auto"> <i class="i i-dot"></i> <span>Profile</span> </a>
                                                </li>
                                                <li>
                                                    <a href="profile-2.html" class="auto"> <i class="i i-dot"></i> <span>Profile 2</span> </a>
                                                </li>
                                                <li>
                                                    <a href="search.html" class="auto"> <i class="i i-dot"></i> <span>Search</span> </a>
                                                </li>
                                                <li>
                                                    <a href="invoice.html" class="auto"> <i class="i i-dot"></i> <span>Invoice</span> </a>
                                                </li>
                                                <li>
                                                    <a href="intro.html" class="auto"> <i class="i i-dot"></i> <span>Intro</span> </a>
                                                </li>
                                                <li>
                                                    <a href="master.html" class="auto"> <i class="i i-dot"></i> <span>Master</span> </a>
                                                </li>
                                                <li>
                                                    <a href="gmap.html" class="auto"> <i class="i i-dot"></i> <span>Google Map</span> </a>
                                                </li>
                                                <li>
                                                    <a href="jvectormap.html" class="auto"> <i class="i i-dot"></i> <span>Vector Map</span> </a>
                                                </li>
                                                <li>
                                                    <a href="signin.html" class="auto"> <i class="i i-dot"></i> <span>Signin</span> </a>
                                                </li>
                                                <li>
                                                    <a href="signup.html" class="auto"> <i class="i i-dot"></i> <span>Signup</span> </a>
                                                </li>
                                                <li>
                                                    <a href="404.html" class="auto"> <i class="i i-dot"></i> <span>404</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-grid2 icon"> </i> <span class="font-bold">Apps</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="mail.html" class="auto"> <b class="badge bg-success lt pull-right">2</b> <i class="i i-dot"></i> <span>Mailbox</span> </a>
                                                </li>
                                                <li>
                                                    <a href="fullcalendar.html" class="auto"> <i class="i i-dot"></i> <span>Calendar</span> </a>
                                                </li>
                                                <li>
                                                    <a href="project.html" class="auto"> <i class="i i-dot"></i> <span>Project</span> </a>
                                                </li>
                                                <li>
                                                    <a href="media.html" class="auto"> <i class="i i-dot"></i> <span>Media</span> </a>
                                                </li>
                                                <li>
                                                    <a href="chat.html" class="auto"> <i class="i i-dot"></i> <span>Chat</span> </a>
                                                </li>
                                                <li>
                                                    <a href="contacts.html" class="auto"> <i class="i i-dot"></i> <span>Contacts</span> </a>
                                                </li>
                                                <li>
                                                    <a href="note.html" class="auto"> <i class="i i-dot"></i> <span>Note</span> </a>
                                                </li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                    <div class="line dk hidden-nav-xs"></div>
                                    <!-- <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Lables</div>
                                    <ul class="nav">
                                        <li>
                                            <a href="mail.html#work"> <i class="i i-circle-sm text-info-dk"></i> <span>Work space</span> </a>
                                        </li>
                                        <li>
                                            <a href="mail.html#social"> <i class="i i-circle-sm text-success-dk"></i> <span>Connection</span> </a>
                                        </li>
                                        <li>
                                            <a href="mail.html#projects"> <i class="i i-circle-sm text-danger-dk"></i> <span>Projects</span> </a>
                                        </li>
                                    </ul>
                                    <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Circles</div>
                                    <ul class="nav">
                                        <li>
                                            <a href="#"> <i class="i i-circle-sm-o text-success-lt"></i> <span>College</span> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="i i-circle-sm-o text-warning"></i> <span>Social</span> </a>
                                        </li>
                                    </ul> -->
                                </nav> <!-- / nav -->
                            </div>
                        </section>
                        <footer class="footer hidden-xs no-padder text-center-nav-xs">
                            <a href="../business/functions.php?action=Logout" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a>
                            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a>
                        </footer>
                    </section>
                </aside> <!-- /.aside -->
                <section id="content">
                    <section class="vbox">
                        <section class="scrollable padder">
                            <div class="m-b-md">
                                <h3 class="m-b-none">Payment Settings</h3>
                            </div>

                            <?php 
                            $enablepaypalstandardbutton = false;
                            $enablepaypalexpressbutton = false;

                            $paypalstandardsandbox = false;
                            $paypalexpresssandbox = false;

                            include_once('../business/DB.php');
                            $sql = "select * from `paymentsettings` limit 1";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    if($row["EnablePaypalStandard"] === "1")
                                        $enablepaypalstandardbutton = true;

                                    if($row["EnablePaypalExpress"] === "1")
                                        $enablepaypalexpressbutton = true;

                                    if($row["PaypalStandardSandbox"] === "1")
                                        $paypalstandardsandbox = true;

                                    if($row["PaypalExpressSandbox"] === "1")
                                        $paypalexpresssandbox = true;
                            ?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <?php echo $message1; ?>
                                    <section class="panel panel-success">
                                        <header class="panel-heading font-bold">Paypal Standard Setting</header>
                                        <div class="panel-body">
                                            <form method="post" enctype="multipart/form-data" action="PaymentSettings.php" class="bs-example form-horizontal">
                                                <div class="form-group"> 
                                                    <label class="col-sm-4 control-label"><b>Payment Mode</b></label>
                                                    <div class="col-sm-2"><b>Live</b></div> 
                                                    <div class="col-sm-4"> 
                                                        <label class="switch"> 
                                                            <input type="checkbox" id="chkPaypalStandardSandbox" name="chkPaypalStandardSandbox" <?php echo ($paypalstandardsandbox == 1 ? 'checked="true"' : '') ?>> <span></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-2"><b>Sandbox</b></div> 
                                                </div>

                                                <div id="LivePaypalStandardSettings">
                                                    <hr>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Live Email</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="email" class="form-control" name="txtLiveEmail" value="<?php echo $row["LiveEmail"] ?>"> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Live Return Url</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="url" class="form-control" name="txtLiveReturnUrl" value="<?php echo $row["LiveReturnUrl"] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Live Cancel Url</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="url" class="form-control" name="txtLiveCancelUrl" value="<?php echo $row["LiveCancelUrl"] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Live Notify Url (IPN)</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="url" class="form-control" name="txtLiveNotifyUrl" value="<?php echo $row["LiveNotifyUrl"] ?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="SandboxPaypalStandardSettings">
                                                    <hr>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Sandbox Email</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="email" class="form-control" name="txtSandboxEmail" value="<?php echo $row["SandboxEmail"] ?>"> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Sandbox Return Url</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="url" class="form-control" name="txtSandboxReturnUrl" value="<?php echo $row["SandboxReturnUrl"] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Sandbox Cancel Url</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="url" class="form-control" name="txtSandboxCancelUrl" value="<?php echo $row["SandboxCancelUrl"] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Sandbox Notify Url (IPN)</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="url" class="form-control" name="txtSandboxNotifyUrl" value="<?php echo $row["SandboxNotifyUrl"] ?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group"> 
                                                    <div class="col-lg-offset-2 col-lg-10"> 
                                                        <div class="checkbox i-checks"> 
                                                            <label> <input type="checkbox" id="chkEnablePaypalStandard" name="chkEnablePaypalStandard" <?php echo ($enablepaypalstandardbutton == 1 ? 'checked="true"' : '') ?>><i></i> <b>Enable Paypal Standard Button</b> </label> 
                                                        </div> 
                                                    </div> 
                                                </div>

                                                <hr>

                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10"> 
                                                        <button name="btnPaypalStandard" type="submit" class="btn btn-sm btn-success" value="btnPaypalStandard">Save Paypal Standard Settings</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-sm-6">
                                <?php echo $message2; ?>
                                    <section class="panel panel-success">
                                        <header class="panel-heading font-bold">Paypal Express Settings</header>
                                        <div class="panel-body">
                                            <form method="post" enctype="multipart/form-data" action="PaymentSettings.php" class="bs-example form-horizontal">
                                                <div class="form-group"> 
                                                    <label class="col-sm-4 control-label"><b>Payment Mode</b></label>
                                                    <div class="col-sm-2"><b>Live</b></div> 
                                                    <div class="col-sm-4"> 
                                                        <label class="switch"> 
                                                            <input type="checkbox" id="chkPaypalExpressSandbox" name="chkPaypalExpressSandbox" <?php echo ($paypalexpresssandbox == 1 ? 'checked="true"' : '') ?>> <span></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-2"><b>Sandbox</b></div> 
                                                </div>

                                                <div id="LivePaypalExpressSettings">
                                                    <hr>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Live API Email</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="text" class="form-control" name="txtExpressLiveApiEmail" value="<?php echo $row["ExpressLiveApiEmail"] ?>"> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Live API Password</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="text" class="form-control" name="txtExpressLiveApiPassword" value="<?php echo $row["ExpressLiveApiPassword"] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Live API Signature</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="text" class="form-control" name="txtExpressLiveApiSignature" value="<?php echo $row["ExpressLiveApiSignature"] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Live Return Url</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="url" class="form-control" name="txtExpressLiveReturnUrl" value="<?php echo $row["ExpressLiveReturnUrl"] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Live Cancel Url</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="url" class="form-control" name="txtExpressLiveCancelUrl" value="<?php echo $row["ExpressLiveCancelUrl"] ?>">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Live Notify Url (IPN)</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="url" class="form-control" name="txtExpressLiveNotify Url" value="">
                                                        </div>
                                                    </div> -->
                                                </div>                                                

                                                <div id="SandboxPaypalExpressSettings">
                                                    <hr>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Sandbox API Email</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="text" class="form-control" name="txtExpressSandboxApiEmail" value="<?php echo $row["ExpressSandboxApiEmail"] ?>"> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Sandbox API Password</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="text" class="form-control" name="txtExpressSandboxApiPassword" value="<?php echo $row["ExpressSandboxApiPassword"] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Sandbox API Signature</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="text" class="form-control" name="txtExpressSandboxApiSignature" value="<?php echo $row["ExpressSandboxApiSignature"] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Sandbox Return Url</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="url" class="form-control" name="txtExpressSandboxReturnUrl" value="<?php echo $row["ExpressSandboxReturnUrl"] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Sandbox Cancel Url</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="url" class="form-control" name="txtExpressSandboxCancelUrl" value="<?php echo $row["ExpressSandboxCancelUrl"] ?>">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group"> 
                                                        <label class="col-lg-4 control-label">Sandbox Notify Url (IPN)</label>
                                                        <div class="col-lg-8"> 
                                                            <input type="url" class="form-control" name="txtExpressSandboxNotify Url" value="">
                                                        </div>
                                                    </div> -->
                                                </div>

                                                <hr>

                                                <div class="form-group"> 
                                                    <div class="col-lg-offset-2 col-lg-10"> 
                                                        <div class="checkbox i-checks"> 
                                                            <label> <input type="checkbox" id="chkEnablePaypalExpress" name="chkEnablePaypalExpress" <?php echo ($enablepaypalexpressbutton == 1 ? 'checked="true"' : '') ?>><i></i> <b>Enable Paypal Express Button</b> </label> 
                                                        </div> 
                                                    </div> 
                                                </div>
                                                
                                                <hr>
                                                
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10"> 
                                                        <button name="btnPaypalExpress" type="submit" class="btn btn-sm btn-success">Save Paypal Express Settings</button> 
                                                    </div>                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            ?>

                        </section>
                    </section>
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                </section>
            </section>
        </section>
    </section> <!-- Bootstrap --> <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/datatables/jquery.dataTables.min.js"></script>
    <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
    <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/charts/flot/jquery.flot.min.js"></script>
    <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/charts/flot/jquery.flot.spline.js"></script>
    <script src="js/charts/flot/jquery.flot.pie.min.js"></script>
    <script src="js/charts/flot/jquery.flot.resize.js"></script>
    <script src="js/charts/flot/jquery.flot.grow.js"></script>
    <script src="js/charts/flot/demo.js"></script>
    <script src="js/calendar/bootstrap_calendar.js"></script>
    <script src="js/calendar/demo.js"></script>
    <script src="js/sortable/jquery.sortable.js"></script>
    <script src="js/app.plugin.js"></script>
    <script>
    $(document).ready(function()
    {
        if($("#chkEnablePaypalStandard").is(":checked"))
            $("#chkEnablePaypalStandard").attr("checked",true);
        else
            $("#chkEnablePaypalStandard").attr("checked",false);

        if($("#chkEnablePaypalExpress").is(":checked"))
            $("#chkEnablePaypalExpress").attr("checked",true);
        else
            $("#chkEnablePaypalExpress").attr("checked",false);

        $("#chkEnablePaypalStandard").change(function() {
            var checked = $(this).is(":checked");
            if (checked) 
                $("#chkEnablePaypalStandard").attr("checked",true);
            else
                $("#chkEnablePaypalStandard").attr("checked",false);
        });

        $("#chkEnablePaypalExpress").change(function() {
            var checked = $(this).is(":checked");
            if (checked) 
                $("#chkEnablePaypalExpress").attr("checked",true);
            else
                $("#chkEnablePaypalExpress").attr("checked",false);
        });
        
        <?php if($paypalstandardsandbox == 1){ ?>
            $("#LivePaypalStandardSettings").hide();
            $("#SandboxPaypalStandardSettings").show();
            $("#chkPaypalStandardSandbox").attr("checked",true);
        <?php } else { ?>
            $("#LivePaypalStandardSettings").show();
            $("#SandboxPaypalStandardSettings").hide();
            $("#chkPaypalStandardSandbox").attr("checked",false);
        <?php } ?>

        //$("#SandboxPaypalStandardSettings").hide();
        $("#chkPaypalStandardSandbox").change(function() {
            var checked = $(this).is(":checked");
            if (checked) {
                $("#LivePaypalStandardSettings").hide();
                $("#SandboxPaypalStandardSettings").show();
                $("#chkPaypalStandardSandbox").attr("checked",true);
            }
            else
            {
                $("#LivePaypalStandardSettings").show();
                $("#SandboxPaypalStandardSettings").hide();
                $("#chkPaypalStandardSandbox").attr("checked",false);
            }
        });

        <?php if($paypalexpresssandbox == 1){ ?>
            $("#LivePaypalExpressSettings").hide();
            $("#SandboxPaypalExpressSettings").show();
            $("#chkPaypalExpressSandbox").attr("checked",true);
        <?php } else { ?>
            $("#LivePaypalExpressSettings").show();
            $("#SandboxPaypalExpressSettings").hide();
            $("#chkPaypalExpressSandbox").attr("checked",false);
        <?php } ?>

        //$("#SandboxPaypalExpressSettings").hide();
        $("#chkPaypalExpressSandbox").change(function() {
            var checked = $(this).is(":checked");
            if (checked) {
                $("#LivePaypalExpressSettings").hide();
                $("#SandboxPaypalExpressSettings").show();
                $("#chkPaypalExpressSandbox").attr("checked",true);
            }
            else
            {
                $("#LivePaypalExpressSettings").show();
                $("#SandboxPaypalExpressSettings").hide();
                $("#chkPaypalExpressSandbox").attr("checked",false);
            }
        });
    })
    </script>
</body>

</html>