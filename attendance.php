<?php
include_once ('connect.php');

$today= $_POST['today'];

$classes=$_POST['classes'];

foreach( $_POST['reason'] as $a)
{
//echo $a;
$var1=substr($a,12);
$var2=substr($a,0,12);

$query="INSERT INTO `new_attn`(`regno`, `name`, classIn,`datesIn`, `reason`) VALUES ($var2,'Neptune','$classes',STR_TO_DATE('$today', '%Y-%m-%d'),'$var1') ";
$result=mysqli_query($conn,$query);
if($result)
{
$query1="select email from addstudent where regno=$var2";
$result1=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($result1);
echo $row['email'];
mail("dcrazzygal@gmail.com","SJCE- NOTIFICATION OF ABSENTEEISM","This is to inform you that your ward REG NO:  $var2 was on $var1 today ie".$today);
//header ('Location: depatt.php');


}
}

?>