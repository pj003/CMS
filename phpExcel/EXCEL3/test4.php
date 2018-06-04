<?php
include_once ('connect1.php');
$classes=$_POST['classes'];
$sql="select distinct regno from new_attn where classIn='$classes' order by regno";
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
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
	
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
	  
    } 
	
  }
}

function myFunction1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
	  
    }
//filter=filter+1;	
  }
}

function D(str)
{
if (str=="") {
    document.getElementById("DisplayDiv").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      //document.getElementById("DisplayDiv").innerHTML=this.responseText;
alert(this.responseText);
    }
  }
  xmlhttp.open("GET","individual.php?inputval="+str,true);
  xmlhttp.send();

}
</script>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Register Number...">
<input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Total leave taken...">
<br><br>
<table border="5" id="myTable">
<tr><th>Register Number</th>
<th> Absent</th>
<th> MedicalLeave </th>
<th> PersonalLeave</th>
<th> Leave </th>
<th> OnDuty </th>
<th> Total </th>
</tr>

<?php

for($i=0;$i<$rows;$i++)
{?>

<?php
$ml=0;
$pl=0;
$abse=0;
$od=0;
$leave=0;
$total=0;
$query="select reason from new_attn where regno=".$data[$i]['regno'];
$result=mysqli_query($conn,$query);
$datum=array();
$number = mysqli_num_rows($result);
while($queries=mysqli_fetch_assoc($result))
{
$datum[]=$queries;
}
for($j=0;$j<$number;$j++)
{
 if(strcmp($datum[$j]['reason'],"MedicalLeave")==0)
	$ml=$ml+1;
else if(strcmp($datum[$j]['reason'],"PersonalLeave")==0)
	$pl++;
else if(strcmp($datum[$j]['reason'],"Absent")==0)
	$abse++;
else if(strcmp($datum[$j]['reason'],"Leave")==0)
	$leave++;
else if(strcmp($datum[$j]['reason'],"OnDuty")==0)
	$od++;

}
$total=$ml+$pl+$leave+$abse;
if($total>=5)
{
?>

<tr><td onclick="D('<?php echo $data[$i]['regno']?>')" onmouseover="" style="cursor: pointer;"><?php echo "<font color='red'>".$data[$i]['regno']."</font>"; ?></td></span>
<td><?php echo $abse; ?></td>
<td><?php echo $ml; ?></td>
<td><?php echo $pl; ?></td>
<td><?php echo $leave; ?></td>
<td><?php echo $od; ?></td>

<td> <?php echo "<font color='red'>". $total."</font>"; ?></td>
</tr></font>
<?php 
}
else
{ ?>
<tr><td onclick="D('<?php echo $data[$i]['regno']?>')" onmouseover="" style="cursor: pointer;"><?php echo $data[$i]['regno']; ?></td>
<td><?php echo $abse; ?></td>
<td><?php echo $ml; ?></td>
<td><?php echo $pl; ?></td>
<td><?php echo $leave; ?></td>
<td><?php echo $od; ?></td>
<td> <?php echo $total; ?></td>
<?php
}
}

?>
</table>
<br>
<form action="trial.php" method="post">
<input type="hidden" name="classes" value="<?php echo $classes; ?>">
&nbsp; &nbsp; &nbsp; <input type="submit" value="Export as Excel">
</form>
</center>
</body>
</html>


		