<?php
session_start();

$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";

$private_username = "admin";
$private_password  = "123456";

if($private_username == $username && $private_password == $password){
	$_SESSION['auth'] = true;

header("location:admin.php");
}else{
	header("location:index.php");
	
}

?>