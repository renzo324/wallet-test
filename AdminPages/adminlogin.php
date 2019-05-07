<?php
// INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `number`) VALUES (NULL, 'fname', 'lname', 'email@email.com', MD5('1234'), '1234567');
$loggedin = false;
$admin = '';
$email = '';
if(isset($_POST['email']) && isset($_POST['password'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wallet.infinitysoftware.io";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM `admin` WHERE `Email` LIKE '".$_POST['email']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
        if($row['Password']==md5($_POST['password'])) $loggedin = $row['id'];
}
if($loggedin == !false){
    session_start();
    $_SESSION['admin'] = array (
        'id' => $loggedin,
        'role' => 'administrator'
        // 'thing' => 'thing' or phpvariables,
    );
	// header("location: users.php");
    echo 'session start!<br>';
    echo implode(",<br> " , $_SESSION['admin']);
} else {
echo 'Invalid login';
}
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
<form method="post">
	Email: <input type="text" name="email"><br>
	Password: <input type="password" name="password"><br>
	<input type="submit" value="Login">
</form>
<script>
</script>

</body>
</html>