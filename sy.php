<!DOCTYPE html>

<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th {
    text-align: left;
}
</style>
</head>
<body>
<center>
<form name="te" action="sy.php" method="post">
no of units:<input type="text" name="aa">
<input type="submit" name="go">
</form>
</center>
<?
$a=$_POST["aa"];
?>
<form name="test">
<table style="width:100%">
  <tr>
    <th>unit</td>
    <th>start date</th>
    <th>endate</th> 
    <th>topics covered</th>
    <th>hours needed</th>
  </tr>
  <?php
  for($i=0;$i<$a;$i++)
  {?>
  <tr>
   <td><input type="text" name="unit"</td>
    <td><input type="date" name="sdate"></td>
    <td><input type="date" name="edate"</td>
    <td><textarea name="topics">enter here</textarea></td>
     <td><input type="text" name="hours"</td>
  </tr>
  <?
  }
  ?>
</table><br>
<input type="submit" name="submit">
</form>

</body>
</html>