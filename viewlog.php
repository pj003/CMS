<?php
include_once('session2.php');
include_once('connect.php');
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>view LOG</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								
								<li>
									<a href="viewlog.php">VIEW LOG</a>
									
								</li>
								<li><a href="viewatt.php">VIEW ATTENDANCE</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							
							</ul>
						</nav>

				</div>
<header>
<center>
<form name='form-login' action="viewlog.php" method="post">
       
       <center>   <input type="text" name="staffid" placeholder="staffid">
  <input type="submit" value="submit" >
</form>

</header>
<?php
$staffid=$_POST['staffid'];

$sql="SELECT classes,sid,subject,unit,completed from daily_lesson WHERE sid='$staffid' ";

$result_set=mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result_set);
$handling= array();
while($query=mysqli_fetch_assoc($result_set))
{
$handling[]=$query;
}


for($i=0;$i<$rows;$i++)
{
?>
<?php echo $handling[$i]['classes'];?><br>
<?php echo $handling[$i]['subject'];?><br>
unit:<?php echo $handling[$i]['unit'];?><br>
<progress value="<?php echo $handling[$i]['completed'];?>" max="8"></progress>
<p> <font color="red"><?php echo $handling[$i]['completed']*100/8;?>%done</font></p>

<?php
}
?>

    

	
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>