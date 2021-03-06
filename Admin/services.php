<?php
session_start();
//$_SESSION["userid"] = 1; //for testing
//$_SESSION['username'] = 'developer'; //for testing

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

$message = "";
$editmessage = "";
$ShowEditBox = false;

if(isset($_POST['btnAddService']) && isset($_POST['Name']) && isset($_POST['Description']) && isset($_POST['Price']) && isset($_POST['category']) && isset($_POST['subcategory']))
{
	include_once('../business/DB.php');

	$errors=[];
	$Name = mysqli_real_escape_string($conn, $_POST['Name']);
	$Description = mysqli_real_escape_string($conn, $_POST['Description']);
	$Price = mysqli_real_escape_string($conn, $_POST['Price']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $subcategory = mysqli_real_escape_string($conn, $_POST['subcategory']);

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($Name)) { array_push($errors, "Service Name is required"); }
	if (empty($Description)) { array_push($errors, "Service Description is required"); }
    if (empty($Price)) { array_push($errors, "Service Price is required"); }
    if (empty($category)) { array_push($errors, "Service Category is required"); }
    if (empty($subcategory)) { array_push($errors, "Service Sub-Category is required"); }
	
	// first check the database to make sure 
	// a service does not already exist with the same servicename, categoryid, sub-categoryid
	$service_check_query = "SELECT * FROM `services` where Service_Name = '".$Name."' and Category_ID='".$category."' and SubCategory_ID='".$subcategory."' LIMIT 1";
	$result = mysqli_query($conn, $service_check_query);
	$service = mysqli_fetch_assoc($result);
	
	if ($service) { // if service exists
		if ($service['Service_Name'] === $Name) {
		    array_push($errors, "Service Name already exists");
		}
	}

    $message = '';
    
	// Finally, add service if there are no errors in the form
	if (count($errors) == 0) {

		$query = "INSERT INTO `services`(`Service_Name`, `Service_Description`, `Service_Price`, `Category_ID`, `SubCategory_ID`) VALUES ('".$Name."','".$Description."','".$Price."','".$subcategory."','".$subcategory."')";
		mysqli_query($conn, $query);

		$query = "SELECT * FROM `services` where Service_Name = '".$Name."' and Category_ID='".$category."' and SubCategory_ID='".$subcategory."' LIMIT 1;";
		$result = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($result) >= 1)//You are mixing the mysql and mysqli, change this line of code
		{
            $message = '<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">??</button> <i class="fa fa-ok-sign"></i><strong>Well done!</strong> Service Added successfully. </div>';
		}
	}
	else
	{
		$message = '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">??</button> <i class="fa fa-ban-circle"></i><strong>Sorry!</strong> Please Use Different Service Name and Category. </div>';
	}
}
elseif(isset($_POST['btnEditService']) && isset($_POST['txtEditedName']) && isset($_POST['txtEditedDescription']) && isset($_POST['txtEditedPrice']) && isset($_POST['txtEditedcategory']) && isset($_POST['txtEditedsubcategory']))
{
    include_once('../business/DB.php');

    $errors=[];
	$txtEditedName = mysqli_real_escape_string($conn, (isset($_POST['txtEditedName']) ? $_POST['txtEditedName'] : $_POST['hfService_Name']));
	$txtEditedDescription = mysqli_real_escape_string($conn, (isset($_POST['txtEditedDescription']) ? $_POST['txtEditedDescription'] : $_POST['hfService_Description']));
	$txtEditedPrice = mysqli_real_escape_string($conn, (isset($_POST['txtEditedPrice']) ? $_POST['txtEditedPrice'] : $_POST['hfService_Price']));
    $txtEditedcategory = mysqli_real_escape_string($conn, (isset($_POST['txtEditedcategory']) ? $_POST['txtEditedcategory'] : $_POST['$hfCategory_Name']));
    $txtEditedsubcategory = mysqli_real_escape_string($conn, (isset($_POST['txtEditedsubcategory']) ? $_POST['txtEditedsubcategory'] : $_POST['hfSubCategory_Name']));

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($txtEditedName)) { array_push($errors, "Service Name is required"); }
	if (empty($txtEditedDescription)) { array_push($errors, "Service Description is required"); }
    if (empty($txtEditedPrice)) { array_push($errors, "Service Price is required"); }
    if (empty($txtEditedcategory)) { array_push($errors, "Service Category is required"); }
    if (empty($txtEditedsubcategory)) { array_push($errors, "Service Sub-Category is required"); }
	
	// first check the database to make sure 
	// a service does not already exist with the same servicename, categoryid, sub-categoryid
    //$service_check_query = "SELECT * FROM `services` where Service_Name = '".$txtEditedName."' and Category_ID='".$txtEditedcategory."' and SubCategory_ID='".$txtEditedsubcategory."' LIMIT 1";
    $service_check_query = "SELECT * FROM `services` where Service_Name = '".$_POST['hfService_Name']."' LIMIT 1";
	$result = mysqli_query($conn, $service_check_query);
	$service = mysqli_fetch_assoc($result);
	
	if (!$service) { // if service exists
		//if ($service['Service_Name'] === $txtEditedName) {
		    array_push($errors, "Service Name do not exists");
		//}
	}

    $editmessage = '';
    
	// Finally, update service if there are no errors in the form
	if (count($errors) == 0) {

        //$query = "Update `services` set Service_Name='".$txtEditedName."', Service_Description='".$txtEditedDescription."', Service_Price='".$txtEditedPrice."' where Service_Name = '".$Name."' and Category_ID='".$category."' and SubCategory_ID='".$subcategory."'";
        $query = "Update `services` set Service_Name='".$txtEditedName."', Service_Description='".$txtEditedDescription."', Service_Price='".$txtEditedPrice."' where Service_Name = '".$_POST['hfService_Name']."'";
		mysqli_query($conn, $query);

        //$query = "SELECT * FROM `services` where Service_Name = '".$txtEditedName."' and Category_ID='".$txtEditedcategory."' and SubCategory_ID='".$txtEditedsubcategory."' LIMIT 1;";
        $query = "SELECT * FROM `services` where Service_Name = '".$txtEditedName."' LIMIT 1;";
		$result = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($result) >= 1)//You are mixing the mysql and mysqli, change this line of code
		{
            $ShowEditBox = false;
            $editmessage = '<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">??</button> <i class="fa fa-ok-sign"></i><strong>Well done!</strong> Service Updated successfully. </div>';
		}
	}
	else
	{
		$editmessage = '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">??</button> <i class="fa fa-ban-circle"></i><strong>Sorry!</strong> Service Does Not Exists. </div>';
	}
}
elseif(isset($_GET["edit"]))
{
    $ShowEditBox = true;
    include_once('../business/DB.php');

    $errors=[];
    $Name = mysqli_real_escape_string($conn, $_GET['edit']);
    if (empty($Name)) { array_push($errors, "Service Name is required"); }

    $query = "select *,(SELECT Category_Name FROM `category` where Category_ID=services.Category_ID) as 'Category_Name', (SELECT SubCategory_Name FROM `sub_category` WHERE SubCategory_ID=services.SubCategory_ID) as 'SubCategory_Name' from services where Service_ID = '".$Name."' LIMIT 1;";
    $result = mysqli_query($conn,$query);
    //$service = mysqli_fetch_assoc($result);
	
	//if (!$service) { // if service does not exists
	//	array_push($errors, "Service does not exists");
    //}
    
    //if (count($errors) == 0) {

    //}
    if ($result->num_rows == 0) {
        array_push($errors, "Service does not exists");
    }
    
    if (count($errors) == 0) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $hfService_ID=$row["Service_ID"];
                $hfService_Name=$row["Service_Name"];
                $hfService_Description=$row["Service_Description"];
                $hfService_Price=$row["Service_Price"];
                $hfCategory_Name=$row["Category_Name"];
                $hfSubCategory_Name=$row["SubCategory_Name"];
            }
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
                                        <li class="active">
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
                                <h3 class="m-b-none">Services</h3>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <?php echo $message; ?>
                                    <section class="panel panel-success">
                                        <header class="panel-heading font-bold">Add Service</header>
                                        <div class="panel-body">
                                            <form method="post" enctype="multipart/form-data" action="services.php">
                                                <div class="form-group"> 
                                                    <label>Service Name</label> <input name="Name" type="text" class="form-control" placeholder="ie, Blog Posting" required> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label>Service Description</label> <input name="Description" type="text" class="form-control" placeholder="Description goes here" required> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label>Service Price</label> <input name="Price" type="number" class="form-control" placeholder="10.0" required> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label>Category</label>
                                                    <!-- <select data-required="true" class="form-control m-t parsley-validated" required> 
                                                        <option value="">Please choose</option>
                                                        <option value="foo">Foo</option>
                                                        <option value="bar">Bar</option> 
                                                    </select>  -->
                                                    <?php 
                                                    include_once('../business/DB.php');
                                                    $sql = "select * from category";
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        echo '<select id="category" name="category" data-required="true" class="form-control m-t parsley-validated" required>';
                                                        echo '<option value="0">Select Category</option>';
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo '<option value="'.$row["Category_ID"].'">'.$row["Category_Name"].'</option>';
                                                        }
                                                        echo '</select>';
                                                    }

                                                    ?>                                                    
                                                </div>
                                                <div class="form-group"> 
                                                    <label>Sub-Category</label> 
                                                    <!-- <select data-required="true" class="form-control m-t parsley-validated" required> 
                                                        <option value="">Please choose</option>
                                                        <option value="foo">Foo</option>
                                                        <option value="bar">Bar</option> 
                                                    </select>  -->
                                                    <?php 
                                                    include_once('../business/DB.php');
                                                    $sql = "select * from sub_category";
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        echo '<select id="subcategory" name="subcategory" data-required="true" class="form-control m-t parsley-validated" required>';
                                                        echo '<option value="0">Select Category</option>';
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo '<option value="'.$row["SubCategory_ID"].'">'.$row["SubCategory_Name"].'</option>';
                                                        }
                                                        echo '</select>';
                                                    }
                                                    
                                                    ?>
                                                </div>
                                                <button id="btnAddService" name="btnAddService" type="submit" class="btn btn-sm btn-success" value="AddService">Submit</button>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-sm-6">
                                    <?php echo $editmessage; ?>
                                    <?php if($ShowEditBox){ ?>                                    
                                    <section class="panel panel-success">
                                        <header class="panel-heading font-bold">Edit Service</header>
                                        <div class="panel-body">
                                            <form method="post" enctype="multipart/form-data" action="services.php">
                                                <div class="form-group"> 
                                                    <label>Service Name</label> <input name="txtEditedName" type="text" class="form-control" placeholder="ie, Blog Posting" value="<?php echo $hfService_Name; ?>" required> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label>Service Description</label> <input name="txtEditedDescription" type="text" class="form-control" value="<?php echo $hfService_Description; ?>" placeholder="Description goes here" required> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label>Service Price</label> <input name="txtEditedPrice" type="number" class="form-control" value="<?php echo $hfService_Price; ?>" required> 
                                                </div>
                                                <div class="form-group">                                                    
                                                    <?php
                                                       echo '<label>Category</label> <input name="txtEditedcategory" type="text" class="form-control" placeholder="Description goes here" value="'.$hfCategory_Name.'" required readonly> ';
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                        echo '<label>Sub-Category</label> <input name="txtEditedsubcategory" type="text" class="form-control" placeholder="Description goes here" value="'.$hfSubCategory_Name.'" required readonly> ';
                                                    ?>
                                                </div>
                                                <button id="btnEditService" name="btnEditService" type="submit" class="btn btn-sm btn-success" value="AddService">Update Service</button>
                                                <input type="hidden" name="hfService_ID" value="<?php echo $hfService_ID; ?>">
                                                <input type="hidden" name="hfService_Name" value="<?php echo $hfService_Name; ?>">
                                                <input type="hidden" name="hfService_Description" value="<?php echo $hfService_Description ?>">
                                                <input type="hidden" name="hfService_Price" value="<?php echo $hfService_Price; ?>">
                                                <input type="hidden" name="hfCategory_Name" value="<?php echo $hfCategory_Name; ?>">
                                                <input type="hidden" name="hfSubCategory_Name" value="<?php echo $hfSubCategory_Name; ?>">
                                            </form>
                                        </div>
                                    </section>
                                    <?php } ?>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <section class="panel panel-default">
                                        <header class="panel-heading font-bold">Update Form</header>
                                        <div class="panel-body">
                                            <form class="bs-example form-horizontal">
                                                <div class="form-group"> 
                                                    <label class="col-lg-2 control-label">Email</label> <div class="col-lg-10"> <input type="email" class="form-control" placeholder="Email"> <span class="help-block m-b-none">Example block-level help text here.</span> </div>
                                                </div>
                                                <div class="form-group"> <label class="col-lg-2 control-label">Password</label>
                                                    <div class="col-lg-10"> <input type="password" class="form-control" placeholder="Password"> </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <div class="checkbox i-checks"> <label> <input type="checkbox" checked=""><i></i> Remember me </label> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10"> <button type="submit" class="btn btn-sm btn-default">Sign in</button> </div>
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                </div> -->
                            </div>

                            <section class="panel panel-success">
                                <header class="panel-heading">Services <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
                                </header>
                                <div class="table-responsive">
                                <table class="table table-striped m-b-none" data-ride="datatables">
                                        <thead>
                                            <tr>
                                                <th width="5%">ID</th>
                                                <th width="25%">Name</th>
                                                <th width="35%">Description</th>
                                                <th width="10%">Category</th>
                                                <th width="15%">Sub-Category</th>
                                                <th width="5%">Price</th>
                                                <th width="5%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                        <?php
											include_once('../business/DB.php');
                                            $sql = "SELECT Service_ID, (SELECT Category_Name FROM `category` where Category_ID=services.Category_ID) as 'Category_Name', (SELECT SubCategory_Name FROM `sub_category` where SubCategory_ID=services.SubCategory_ID) as 'SubCategory_Name', Service_Name, Service_Description, Service_Price FROM `services`";
											$result = $conn->query($sql);

											$carttotal = 0;
											if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) 
                                                {
                                            ?>
                                            <tr>
                                                <td><?php echo $row["Service_ID"]; ?></td>
                                                <td><b><?php echo $row["Service_Name"]; ?></b></td>
                                                <td><?php echo $row["Service_Description"]; ?></td>
                                                <td><?php echo $row["Category_Name"]; ?></td>
                                                <td><?php echo $row["SubCategory_Name"]; ?></td>
                                                <td><b><?php echo $row["Service_Price"]; ?></b></td>
                                                <td><a href="services.php?edit=<?php echo $row['Service_ID']; ?>" class="btn btn-success" >Edit</a></td>
                                            </tr>

                                            <?php
												}
                                            }
											?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th width="5%">ID</th>
                                                <th width="25%">Name</th>
                                                <th width="40%">Description</th>
                                                <th width="10%">Category</th>
                                                <th width="15%">Sub-Category</th>
                                                <th width="5%">Price</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </section>
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
</body>

</html>