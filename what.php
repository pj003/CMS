<?php
include_once('connect.php');
$que="insert into addstudent (regno,name,years,dept,section,phone,email,statuss) values (128,'lopl',4,'cse','a','12345678','abshcom',1)";
if(mysqli_query($conn,$que))
echo "1";
else
echo "2";
$que2="insert into what (a,b) values (1,2)";
mysqli_query($conn,$que2);

?>