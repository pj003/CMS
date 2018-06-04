<?php
session_start(); // Starting Session
include_once('connect.php');
$error=''; // Variable To Store Error Message
//if (isset($_POST['form-login'])) 
{
//echo "1";
if (empty($_POST['username']) || empty($_POST['password']))
{

$error = "Username or Password is invalid";
echo $error;
}
else
{
//echo "2";
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);
//echo $username.$password;
$sql="SELECT id,name,password,type from staff WHERE password='$password' AND name='$username'";
$result_set=mysqli_query($conn,$sql);

$rows = mysqli_num_rows($result_set);
//echo"helo";
$query=mysqli_fetch_assoc($result_set);
if($query['type'] ==te)
{
 $link = 'staff.php';
}
else if ($query['type'] ==fi)
{
 $link = 'update.php';
}
else if  ($query['type']==ad)
{
  $link= 'viewlog.php';
}

 
if ($rows == 1) {
 // Initializing Session
echo "hi";
$_SESSION['login_user']=$username;
$_SESSION['id']=$query['id'];
header("location:".$link."");
 // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>