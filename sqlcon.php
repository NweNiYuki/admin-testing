<?php
include("db.php");

	$name = $_POST['name'];
	$price = $_POST['price'];

	$sql = "INSERT INTO phone (name, price) VALUES ('$name', '$price')";
	mysqli_query($conn, $sql);

	header("location: admin.php");


?>