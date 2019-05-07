<?php
// require 'functions.php';
// $servername = "localhost";
// $username = "root";
// $password = "";
$servername = "infinitysvsoft.mysql.db";
$username = "infinitysvsoft";
$password = "puS9xu5cdP4Wnsu";
$dbname = "infinitysvsoft";
$conn = new mysqli($servername, $username, $password,$dbname);
$loggedin = false;
$msg= "";
$email='';
$password='';
// if (isset($_POST['submit'])) register();
// function register(){
	if(isset( $_POST['email'], $_POST['password'])) {
		$email=$_POST['email'];
		$password=$_POST['password'];
		$cPassword=$_POST['cPassword'];
	};
	$errorCheck = "SELECT * FROM `Users` WHERE `Email` LIKE '".$email."'";
	$sql = "INSERT INTO `Users` (`ID`, `Email`, `Password`) VALUES (NULL, '".$email."', MD5('".$password."'));";
	if(isset($_POST['signup'])){
				//Check if email is already registered
			if($conn->query($errorCheck)->num_rows > 0){
				$msg = "That email is already registered";
			}else{
				if ($conn->query($sql) === TRUE) {
				// $token = md5($email);
				$template = file_get_contents('verification.php',FALSE, NULL, 0, 5690) . md5($email) . file_get_contents('verification.php', FALSE, NULL, 5690);//5690   
				
				
				// Send the message
				$mg->messages()->send('infinitysoftware.io', [
					'from'    => 'No-Reply <mailgun@infinitysoftware.io>',
					'to'      => $email,
					'subject' => 'Verify Your Email Address',
					'html'		=> $template
				
					]);
					header('Location: ThankYou.html');
				}
				else{
				echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			}


$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title> Wallet Infinity - Account Registration </title>
  
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
<body>

  <?php if($msg != "") echo '<div class="alert alert-danger" role="alert">'. $msg . '</div>';?>

<div class="register-box floatRight">
 <div class="register-box-body">		
	<div class="register-logo"><a href="index.php"><img src="img/coin.png" alt="logo" id="infLogo"></a>
	</div>
	<p class="login-box-msg">Register a new membership</p>
	<form method="post" class="form-element">
		<div class="form-group has-feedback">
		<input type="email" name="email" class="form-control" placeholder="Email">
		<span class="ion ion-email form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
		<input type="password" class="form-control" name="password" placeholder="Password">
		<span class="ion ion-locked form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
		<input type="password" class="form-control" name="cPassword" placeholder="Confirm Password">
		<span class="ion ion-locked form-control-feedback"></span>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="checkbox">
					<input type="checkbox" name="tnc" id="basic_checkbox_1">
					<label for="basic_checkbox_1">I agree to the <a target="_blank" href="https://www.iubenda.com/privacy-policy/51866348"><b>Terms and Conditions</b></a>	</label>
				</div>
			</div>
			<div class="col-12 text-center">
			<input type="submit" value="SIGN UP" name="signup" class="btn btn-info btn-block margin-top-10">
			</div>
		</div>	
	</form>
		<div class="social-auth-links text-center">
			<p> - OR - </p>
			<a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
			<a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google"></i></a>
		</div>
		<div class="margin-top-20 text-center">
		<p>Already have an account? <a href="login.php" class="text-info m-1-5"> Sign In</a></p>
		</div>
	</div>
</div>

<!-- jQuery 3 -->
<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
<!-- popper -->
<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
<!-- Bootstrap 4.0-->
<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
<script>
</script>

</body>
</html>