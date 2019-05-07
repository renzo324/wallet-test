<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wallet.infinitysoftware.io";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
// echo $_SESSION['users'] ['id'];
// echo implode("<br>" ,$_SESSION['users']);

$sql = "SELECT * FROM `users` WHERE `id` LIKE '".$_SESSION['users']['id']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: ".$_GET['id']."<br>FIRST NAME: ".$row['Username']."<br>LAST NAME: doesnotexist here<br>EMAIL: ".$row['Email']."<br>Password: ".$row['Password']."<br><br><a href='delete.php?id=".$row['id']."'>Delete Account</a>";
    }
}




?>

</body>
</html>