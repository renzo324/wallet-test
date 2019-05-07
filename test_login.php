<?php
// INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `number`) VALUES (NULL, 'fname', 'lname', 'email@email.com', MD5('1234'), '1234567');
$loggedin = false;
$admin = '';
$email = '';
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


$sql = "SELECT * FROM `test` WHERE `Email` LIKE '".$_POST['email']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
        if($row['Password']==md5($_POST['password'])) $loggedin = $row['ID'];
}
if($loggedin == !false){
    session_start();
    $_SESSION['admin'] = array (
        'id' => $loggedin,
        'role' => 'user'
        // 'thing' => 'thing' or phpvariables,
    );
	// header("location: users.php");
    echo 'session start!<br>';
    header("location:index.php");
    // echo implode(",<br> " , $_SESSION['admin']);
} else {
echo 'Invalid login';
}
}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title> Login </title>
  
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
<body class="hold-transition login-page">
<div class="login-box">
        <div class="login-logo">
         <a href="#"><img src="img/INFwallet.png" alt="logo" id="infLogo"></a>
        </div>
        <div class="login-box-body">
         <p class="login-box-msg">Sign in to start your session</p>
        </div>
        <form method="post" class="form-element">
        	<div class="form-group has-feedback">
             <input class="form-control" type="text" name="email" placeholder="Email"> <span class="ion ion-email form-control-feedback"></span>
            </div>
        	<div class="form-group has-feedback">
             <input class="form-control" type="password" name="password" placeholder="Password"> <span class="ion ion-locked form-control-feedback"></span>
            </div>
            <div class="row">
             <div class="col-6"> 
              <input type="checkbox" id="basic_checkbox_1">
              <label for="basic_checkbox_1">Remember Me</label>
             </div>
             <div class="col-6">
              <div class="fog-pwd">
                <a href="javascript:void(0)"><i class="ion ion-locked"></i> Forgot Password?</a><br>
              </div>
             </div>
             <div class="col-12 text-center">
             <input type="submit" value="Login"class="btn btn-info btn-block margin-top-10">
             </div>
            </div>
        </form>
        <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google"></i></a>
        </div>
</div>
<script>
</script>
    <!-- jQuery 3 -->
    <script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
    
    <!-- popper -->
    <script src="assets/vendor_components/popper/dist/popper.min.js"></script>
    
    <!-- Bootstrap 4.0-->
    <script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>