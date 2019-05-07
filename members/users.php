<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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


$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['fName']." ".$row['lName']. "<br>"  .$row['Email'] . "<br> " . $row['Password'].` ` . $row['Username'] . " <br>";
        echo ' <a href="edit.php?='.$row['id'].'"> edit </a> <br>';
    }
}

?>
<br>
<a href="register.php">Add user</a>


<script>
</script>

</body>
</html>