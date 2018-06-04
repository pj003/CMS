<?php
include_once('session2.php');
include_once('connect.php');
$q=$_GET['name'];
$r=$_GET['class'];
$u=$_GET['unit'];
//echo $q;
//echo $r;
//echo $u;
$date = date('Y-m-d', $timestamp);
echo $date;
$id=$_SESSION['id'];
$sql="SELECT sub from staffsub where sid='$id'  and handling='$r' ";
$result_set=mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result_set);
$query=mysqli_fetch_assoc($result_set);
$sub=$query['sub'];
//echo $sub;

$sql="SELECT unit,completed from daily_lesson where sid='$id' and classes='$r' and unit='$u'  ";
$result_set=mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result_set);
$query=mysqli_fetch_assoc($result_set);
$completed=$query['completed'];
$unit=$query['unit'];
//echo $completed;
//echo $unit;
if($unit)
{
$completed=$completed+$q;
//echo $completed;
$sql="UPDATE daily_lesson
SET completed = $completed,datesin='2017-03-21'
WHERE sid= '$id' and classes='$r' and unit='$unit' ";
$res=(mysqli_query($conn,$sql));
if($res)
echo "success";
else
echo "failed";
}
else 
{

$sql="INSERT into daily_lesson (classes,sid,datesin,subject,unit,completed) values ('$r','$id',date '2017-03-21','$sub',$u,$q)";
$res=(mysqli_query($conn,$sql));
if($res)
echo "success";
else
echo "failed";
}

//$spl="SELECT unit from daily_lesson where sid='$id'  and class='$r' ";
//$result_set=mysqli_query($conn,$sql);

?>
