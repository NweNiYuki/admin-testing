<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password)

echo "Hello, Your name is fault <b>$username</b>.";

else

echo "Login Missing", "Please try again";


?>