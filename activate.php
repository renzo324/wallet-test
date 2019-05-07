<?php 
require 'functions.php';
// header('location: login.php');
$loggedin=false;
if(isset($_POST['email']) && isset($_POST['password'])){
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "wallet.infinitysoftware.io";
    $servername = "infinitysvsoft.mysql.db";
    $username = "infinitysvsoft";
    $password = "puS9xu5cdP4Wnsu";
    $dbname = "infinitysvsoft";
    $conn = new mysqli($servername, $username, $password,$dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $email= $conn->real_escape_string($_POST['email']);
    $pass= $conn->real_escape_string($_POST['password']);
    $sql= "SELECT * FROM `Users` WHERE `Email` LIKE '".$_POST['email']."' AND `Password` = md5('".$pass."') LIMIT 1";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
			  $row= $result->fetch_assoc();
				$loggedin= $row['ID'];
				$confirm = "SELECT * FROM `Users` WHERE `Email` LIKE '".$email."' LIMIT 1";
				if($conn->query($confirm)->num_rows > 0){
					
					$conn->query("UPDATE `Users` SET `cEmail`=1 WHERE `Email` = $email");
				}
				// $userEmail = $row['Email'];
    }
    if($loggedin == TRUE){
        session_start();
        $_SESSION['login'] = array (
        'id' => $loggedin,
        'email' => $email,
        'role' => 'user',
        'userLoggedin' => true,
        'start' => time()  
				);
				echo implode(",<br> " , $_SESSION['login']);
				header('location: wallet.php');}
    // } else {
    //     echo 'Invalid login';
    //     }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Wallet Infinity - Verify Email </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="css/bootstrap-extend.css">

	<!-- Theme style -->
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
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
	
	  <div class="lockscreen-box-body">

	  <!-- START LOCK SCREEN ITEM -->
	  <div class="lockscreen-item">
		<!-- lockscreen image -->
		<div class="lockscreen-image">
		  <a class="lockscreen-image" href="index.php"><img src="img/coin.png" alt="User Image"></a>
		</div>
		<!-- /.lockscreen-image -->	
    	
	    <!-- User name -->
	    <div class="lockscreen-name margin-top-20"><h3>Almost there!</h3></div>
	    <div class="lockscreen-name margin-top-20"><h4>Just one more step</h4></div>
			<div class="lockscreen-name"><p>Please sign in here to verify your account</p></div>
	    
		<!-- lockscreen credentials (contains the form) -->
		<form method="post" class="lockscreen-credentials form-element margin-top-20">
            <div class="form-group has-feedback">
             <input class="form-control" type="text" name="email" placeholder="Email"> <span class="ion ion-email form-control-feedback"></span>
            </div>
		  <div class="form-group has-feedback">
			<input type="password" class="form-control" name="password" placeholder="Password">
			<span class="ion ion-locked form-control-feedback "></span>
		  </div>
		  <!-- /.col -->
			<div class="text-center">
			  <button type="submit" class="btn btn-info btn-block margin-top-10">LOGIN</button>
			</div>
        <!-- /.col -->
		</form>
		<!-- /.lockscreen credentials -->

	  </div>
	  <!-- /.lockscreen-item -->
	  <div class="help-block text-center margin-top-20">
		You may sign in here 
	  </div>
	  <div class="text-center">
		Or <a href="login.php"><b>here</b></a>
	  </div>
	</div>
</div>
<!-- /.center -->

	<!-- jQuery 3 -->
	<script src="../../../assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="../../../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	
</body>
</html>
