<?php 
session_start();
include 'functions.php';
$firstName='';
$lastName='';
$userEmail=$_SESSION['login']['email'];
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$msg='';
if (!isset($_SESSION['login'])){
 header("location: login.php");
}
else if(time() - $_SESSION['login']['start'] > 3600){
logout();
} else{
// echo implode("<br>", $_SESSION['login']);
	$sql = "SELECT * FROM `Users` WHERE `ID` LIKE '".$_SESSION['login']['id']."'"; 
	$result=  $conn->query($sql);
	if($result->num_rows > 0){
		$row = $result-> fetch_assoc();
    $userEmail = $row['Email'];
    $firstName = $row['Fname'];
    $lastName = $row['Lname'];
	}
}

$session= $_SESSION['login'];
$msg='';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Wallet Infinity - Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
    
	<!--amcharts -->
	<link href="https://www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
	
	<!-- Bootstrap-extend -->
	<link rel="stylesheet" href="css/bootstrap-extend.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/master_style.css">
	
	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">
	<!-- Custom CSS -->
  <link rel="stylesheet" href="css/wallet.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

     
  </head>

<body class="hold-transition skin-black sidebar-mini">

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="img/coin.png"  alt="logo"></span>
		  <span class="dark-logo"><img src="img/coin.png"  alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="img/coin.png"  alt="logo" class="light-logo">
	  	  <img src="img/coin.png"  alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  <!-- <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			      </form>
      </li>			
		   -->
          
		  <!-- User Account -->
          <!-- Control Sidebar Toggle Button -->
          <li class="hide">
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="ulogo">
			 <a href="index.html">
			  <!-- logo for regular state and mobile devices -->
        <span><b>Wallet </b>Infinity</span>
      </a>
    </div>
        <div class="image">
        <?php ?>  
        <img src="img/coin.png" class="rounded-circle" alt="Coin Image">
        </div>
        <div class="info">
          <p>Welcome <?php if($firstName !=='' && $lastName !== ''){ echo $firstName. " ". $lastName;} else{ echo $userEmail; }?></p>
            <a href="functions.php?logout" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
        </div>
      </div>
      
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
    <li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li>
          <a href="wallet.php">
            <i class="fa fa-dashboard"></i> <span>Wallet</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="account.php">
            <i class="icon-wallet"></i> <span>KYC</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <!-- sidebar menu -->
        <li>
        
        
      </ul>
    </section>
  </aside>