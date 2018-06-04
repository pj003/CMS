<?php
error_reporting(E_ALL);

include_once('connect.php');
$regno=$_POST['regno'];
$name=$_POST['name'];
$year=$_POST['year'];
$dept=$_POST['dept'];
$sec=$_POST['sec'];
$phone=$_POST['phone'];
$eid=$_POST['email'];
$stat=$_POST['status'];
//echo $regno,$name,$year,$dept,$sec,$phone,$eid,$stat;
$sql="INSERT into addstudent (regno,name,years,dept,section,phone,email,statuss) values ($regno,'$name',$year,'$dept','$sec','$phone','$eid',$stat)";
$res=(mysqli_query($conn,$sql));
if($res)
echo "success";
else
echo "bahhhd";
?>