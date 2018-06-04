<?php
include('session2.php');
?>
<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
include('session2.php');
?>

<html>
	<head>
		<title>STAFF</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage" >
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="staff.php" id="logo">Welcome <?php echo $login_session; ?></a></h1>
								<hr />
								<p><?php echo $login_session; ?></p>
							</header>
							
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="staff.php">Home</a></li>
								<li>
									<a href="up.php">UPDATE LOG</a>
									
								</li>
								<li><a href="left-sidebar.html">VIEW ATTENDANCE</a></li>
								<li><a href="mail.php">GROUP MAIL</a></li>
								
<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</nav>

				</div>

			

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