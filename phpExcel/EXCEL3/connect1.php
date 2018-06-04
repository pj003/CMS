<?php
$servername = "mysql.hostinger.in";
$username = "u898749347_cms";
$password = "3Zz5fVlwhCrN";
$database= "u898749347_cms";

$conn = mysqli_connect($servername, $username, $password,$database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


