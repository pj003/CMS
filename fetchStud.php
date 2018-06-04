<?php
include_once('connect.php');
$classes=$_GET['inputval'];
$sql="SELECT regno,name FROM `addstudent` WHERE classes='$classes' order by regno";

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

$sql1="Select sid from staffsub where handling='$classes' ";
$result1=mysqli_query($conn,$sql1);
$staffid=array();
while($query1=mysqli_fetch_assoc($result1))
{
$staffid[]=$query1;
}
//echo $staffid[0]['sid'];
?>
<html>
<head>
<style>

table, th, td {
    border: 1px solid grey;
border-collapse: collapse;
}
th, td {
    padding: 15px;
}
th
{
color: white;
}
td
{
color: black;
font-weight: bold;
}
</style>
</head>
<body>
<center>
<div class="col-md-9 col-md-offset-2">
    <form>
      
<div class="form-group col-md-2" style="overflow:hidden">
		  

		  </form>
</div></div>
</center>
<br>
<br>
<br>
<br>


<center>
<form id="myForm" action="attendance.php" method="post">
<input type="date" name="today"><br>
	<table width=50%>
  <tr>
<strong>    <th>Reg No</th>
    <th>Name</th> 
    <th>Absent</th>

<th>Type of leave</th>
  </tr></strong>
<?php for($i=0;$i<$val;$i++)
{
?>
<tr>
<td><?php echo $name[$i]['regno']; ?> </td>
<td><?php echo $name[$i]['name']; ?></td>
<td><input type="checkbox" name="absent[]" value="<?php echo  $name[$i]['regno'];?>" ></td>

<td>

<select name="reason[]">
<option selected disabled hidden>type</option>
                <option value="<?php echo $name[$i]['regno']; ?>Leave">Leave</option>
                <option value="<?php echo $name[$i]['regno']; ?>MedicalLeave">MedicalLeave</option>
                <option value="<?php echo $name[$i]['regno']; ?>PersonalLeave">PersonalLeave</option>
<option value="<?php echo $name[$i]['regno']; ?>Absent">Absent</option>
<option value="<?php echo $name[$i]['regno']; ?>OnDuty">OnDuty</option>
</select>



</td>
</tr>
</center>
<?php }?>
</table>
<input type="hidden" name="classes" value="<?php echo $classes; ?>">
<br><br>

<br>
<br>
<center>
<input type="submit" value="submit">
</form>
</center>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"/>


	<link href="test3.css" rel="stylesheet">


</body></html>