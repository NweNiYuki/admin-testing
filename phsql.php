<?php
include("db.php");

$phname = $_POST['phname'];
$ph_id = $_POST['ph_id'];
$color = $_POST['color'];
$cover = $_FILES['cover']['name'];
$tmp   = $_FILES['cover']['tmp_name'];

if($cover) {
	move_uploaded_file($tmp, "covers/$cover");
}

$sql = "INSERT INTO categories (phname, ph_id, color, cover) VALUES ('$phname', '$ph_id', '$color', '$cover')";

mysqli_query($conn, $sql);
header("location: manageph.php");
?>