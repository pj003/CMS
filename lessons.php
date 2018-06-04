<?php

include_once('session2.php');
include_once('connect.php');
$id=$_SESSION['id'];
$sql="INSERT INTO `daily_lesson`(`sid`, `date`, `subject`, `unit`, `completed`) VALUES ('te1','23-09-2016','MC',1,3)";
$res=(mysqli_query($conn,$sql));
if($res)
echo "success";
else
echo "bahhhd";
?>