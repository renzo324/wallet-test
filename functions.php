<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
$servername = "infinitysvsoft.mysql.db";
$username = "infinitysvsoft";
$password = "puS9xu5cdP4Wnsu";
$dbname = "infinitysvsoft";
$conn = new mysqli($servername, $username, $password,$dbname);
$userEmail='';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Composer Autoload
require 'vendor/autoload.php';
// require 'phpqrcode/qrlib.php';	
// Mailgun Code
use Mailgun\Mailgun;
$mailgunAPI = 'key-1167d795f2209be269859ad443414ea8';
$mg = Mailgun::create($mailgunAPI);
//Mailgun Template

//functions
// if($_GET){
// if($_GET['function']=='login') login();
// if($_GET['function']=='register'){
// 	function (){
// 		$email='';
// 		$password='';
// 		if(isset( $_POST['email'], $_POST['password'])) {
// 			$email=$_POST['email'];
// 			$password=$_POST['password'];
// 		};
	
// 		$sql = "INSERT INTO `test` (`ID`, `Email`, `Password`) VALUES (NULL, '".$email."', MD5('".$password."') );";
// 		if(isset($_POST['signup'])){
// 			if ($conn->query($sql) === TRUE) {
// 				echo "New record created successfully<br>";
// 				$view= $conn->query("SELECT * FROM `test` ");
// 					if ($view->num_rows >0){
// 						while($row = $view -> fetch_assoc()){
// 							echo "Registered on test database <br>";
// 							echo "ID: ".$row['ID']." , Email: ".$row['Email']."<br>";
// 						}
// 					}
// 			   }
// 			   else{
// 				 echo "Error: " . $sql . "<br>" . $conn->error;
// 			   }
// 		}
// 	};

// // if($_GET['function']=='activateUser') activateUser($_GET['id']);
// // if($_GET['function']=='resetPass') resetPass($_GET['id']);
// // }
if(isset($_GET['logout'])) logout();
// if(isset($_GET['email'])) $userEmail=$_GET['email']; getWallet($userEmail);
// if(isset($_GET['']))

function logout(){
	session_start();
	session_unset();
	session_destroy();
	header("location: login.php");
};
// // function getWallet($userEmail){
// // 		$fullNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
// // 		$solidityNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
// // 		$eventServer = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
// // 		try {
// // 				$tron = new \IEXBase\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
// // 		} catch (\IEXBase\TronAPI\Exception\TronException $e) {
// // 				exit($e->getMessage());
// // 		}
// // 		GLOBAL $conn;
// // 		$sql= "SELECT * FROM `Wallets` WHERE `WalletOwner` = '".$userEmail."'";
// // 		$result= $conn->query($sql);
// // 		if($result === false){
// // 			user_error("Query failed: ".$conn->error."<br />");
// // 			return false;
// // 		}
// // 		$bal=0;
// // 		if($result->num_rows>0){
// // 			while($row = $result->fetch_assoc()){
// // 				$tron->setAddress($row['WalletAdr']);
// // 				$account = $tron->getAccount(null, true);
// // 				$balance = $tron->getBalance(null, true);

// // 				$bal = $bal + intval($account['assetV2']['0']['value']);
// // 				$english_format_number = number_format($account['assetV2']['0']['value']);
// // 				$id = $row['ID'];
// // 				$WalletAdr=$row['WalletAdr'];
// // 				$Name=$row['WalletName'];
// // 				$resp='[';
// // 				$resp.=$WalletAdr;
// // 				$resp.=json_encode($account);
// // 				$resp.=']';
// // 				echo 
// // 				'
// // 				<pre>'.print_r($resp,true).'</pre>
// // 				';
// // 			}
// // 		}
// // };
?>