<?
include_once('session2.php');
include_once('connect.php');
$hand=($_GET['inputval']);
//echo $hand;
$id=$_SESSION['id'];
$sql="SELECT sub from staffsub where sid='$id'  and handling='$hand' ";
$result_set=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result_set,MYSQLI_NUM);
$filename = "syllabus/".$row[0].".txt";
$fd = fopen ($filename, "r");
$contents = fread ($fd,filesize ($filename));
fclose ($fd);
$delimiter = "-";
$splitcontents = explode($delimiter, $contents);
$counter = "";
?>
<html>
<head>
<link href="assets/css/switch.css" rel="stylesheet">
	<link href="test3.css" rel="stylesheet">
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
}
table {
     width: 500px;
    border-spacing: 5px;
}
</style>
</head>
<body>
<br><br>
&nbsp; &nbsp;<input type="date" name="today" size="56" >
<br><Br>
<div id="container" style="width:100%;">                                   
  <div id="left" style="float:left; width:50%;"> 
<table>
<tr>
<th>topics</th>
<th>Status</th>
</tr>
<?php
foreach ( $splitcontents as $color )
{

     $counter = $counter+1;
?>
<tr>
<td>
<b> <php echo $counter ?> </b> <?php echo $color ?><br>
</td>
<td> <button onclick="loadDet('<?php echo $color ?>')"> </td>
</tr>
<?php } ?>
</form>
</table>
      </div>  
</div> 


</body>
</html>
		