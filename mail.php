<?php
include_once('connect.php');
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>GROUP MAIL</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="staff.php" id="logo">GROUP MAIL</a></h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="staff.html">HOME</a></li>
								<li>
									<a href="up.php">UPDATE LOG</a>
									
								</li>
								<li><a href="left-sidebar.html">VIEW ATTENDANCE</a></li>
								<li><a href="mail.php">GROUP MAIL</a></li>
								
<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</nav>
				</div>
<?php

echo '<form action="send.php" method="post">
	  <legend>Enter your information in the form below:</legend>
	  <p>Class <input name="class" type="text" size="30" /></p>
	  <p>Subject: <input name="subject" type="text" size="30" /></p>
	  <p>Message:</p> <p><textarea name="message" cols="50" rows="8" placeholdwe="Enter Your Message Here..."></textarea></p>


<br><br>

	  <input name="submit" type="submit" value="Email" />
	  <input name="reset" type="reset" value="Reset" />
	  <input name="submitted" type="hidden" value="true" />
	
	  </form>' ;
	  


//End PHP
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