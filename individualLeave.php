<?php
include_once ('connect.php');
$sql="select distinct regno from new_attn where classIn='1csea'";
$result_set=mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result_set);
$data= array();
while($query=mysqli_fetch_assoc($result_set))
{
$data[]=$query;
}
?>
<html>
<body>
<table border="5">
<?php
for($i=0;$i<$rows;$i++)
{?>
<tr>
<td><?php echo $data[$i]['regno']; ?> </td>
<?php
$query="select  datesIn,reason from new_attn where regno=".$data[$i]['regno'];
$result=mysqli_query($conn,$query);
$datum=array();
$number = mysqli_num_rows($result);
while($queries=mysqli_fetch_assoc($result))
{
$datum[]=$queries;
}
for($j=0;$j<$number;$j++)
{
?>
<td><?php echo $datum[$j]['datesIn']; ?></td>
<td><?php echo $datum[$j]['reason']; ?></td>
<?php } ?>
</tr>
<?php }
?>
</table>
</body>
</html>
