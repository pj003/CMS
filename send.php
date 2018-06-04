<?php
include_once('connect.php');
$subject = $_POST['subject'];
$message = $_POST['message'];
$class = $_POST['class'];
//echo $class;
$sql="SELECT email from addstudent where classes='$class' ";
$result_set=mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result_set);
//echo $rows;

$handling= array();
while($query=mysqli_fetch_assoc($result_set))
{
$handling[]=$query;
}

for($i=0;$i<$rows;$i++) {
$to=$handling[$i]['email'];

 mail($to,$subject,$message);
}
header("location:mail.php");
?>