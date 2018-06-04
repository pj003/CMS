<?php
include_once ('connect.php');
$absent[]=$_POST['absent'];
$od[]=$_POST['od'];
$classes=$_POST['classes'];
foreach ($_POST['absent'] as $a)
 {
$query="INSERT INTO `Student`(`regno`, `ClassIn`, `Staff-ID`, `AbsentHr`) VALUES ($a,'$classes','te1',0) ";
$result=mysqli_query($conn,$query);
if($result)
//echo "success1";
$query1="select phone from addstudent where regno=$a";
$result1=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($result1);
//echo $row['phone'];
mail("dcrazzygal@gmail.com","SJCE- NOTIFICATION OF ABSENTEEISM","This is to inform you that your ward REG NO:  $a was on leave today ie 22-03-2017.");
header('Location: update.php');
}

?>