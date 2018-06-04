<?php
include_once('connect.php');
$regno=$_GET['regno'];
//echo $regno;
$sql="select datesIn,reason from new_attn where regno=".$regno;

$result_set=mysqli_query($conn,$sql);
if(!$result_set)
echo  "nonsense";
$val=mysqli_num_rows($result_set);
//echo $val;
$name= array();
while($query=mysqli_fetch_assoc($result_set))
{
$name[]=$query;
}
?>
<html>
<body>
<table border="5" cellspacing="10">
<tr>
<th>
 Date of Absent </th>
<th>Original Reason </th>
<th> Modified Reason </th>
</tr>

<?php for($i=0;$i<$val;$i++)
{
?>

<tr>
<td><?php echo  $name[$i]['datesIn']; ?></td>
<td><?php echo $name[$i]['reason']; ?></td>
<td><select>
<option> OD</option>
<option> Leave </option>
<option> ML </option>
<option> PL </option>
</select>
</td>
</tr>
<?php } ?>
</table>
</body>
</html>