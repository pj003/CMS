<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include_once('connect.php');
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$sql="select name from staff where name='$user_check'";
$result_set=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result_set);
$login_session =$row['name'];
if(!isset($login_session)){
mysqil_close($conn); // Closing Connection
header('Location: index.html'); // Redirecting To Home Page
}
?>