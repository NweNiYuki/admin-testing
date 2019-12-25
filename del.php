<?php

 include("db.php");

 $id = $_GET['id'];

 $sql = "DELETE FROM phone WHERE id = $id";

 mysqli_query($conn, $sql);

 header("location: admin.php");
?>
