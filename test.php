<?php

function explodeX( $delimiters, $string )
{
    return explode( chr( 1 ), str_replace( $delimiters, chr( 1 ), $string ) );
}

$list = $filename = "syllabus/MC.txt";

$fd = fopen ($filename, "r");
$contents = fread ($fd,filesize ($filename));


fclose ($fd);

$exploded = explodeX( array('&', '-' ), $contents );
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
foreach ( $exploded as $color )
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



//echo '<pre>';
//print_r($exploded);
//echo '</pre>';
