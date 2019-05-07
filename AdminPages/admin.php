<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wallet.infinitysoftware.io";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$Username='';
$Password='';
$Email='';
if(isset($_POST['Username'])) $Username=$_POST['Username'];  
if(isset($_POST['Email'])) $Email=$_POST['Email'];
if(isset($_POST['Password'])) $Password=$_POST['Password'];
$sql = "INSERT INTO `admin` (`id`, `Username`, `Email`, `Password`) VALUES (NULL, '".$Username."', '".$Email."', MD5('".$password."'));";
$result = $conn->query($sql);
// header("location: users.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<form method="post">
UserName: <input type="text" name="Username"><br>
Email: <input type="text" name="Email"><br>
Password: <input type="password" name="Password"><br>
<input type="submit" value="Add Admin">
</form>
<script>
</script>

</body>
</html>