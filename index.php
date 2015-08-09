<!-- 	DaysOff Application By Ashish Kapoor
TODO:
1. Complete Databases & Sign Up
2. Complete Databases & Login
3. Complete Admin
4. Complete Users
5.
-->

<!DOCTYPE HTML>
<html>

<!-- head -->
<head>
	<title>Aricent - Days Off</title>
	<link rel="shortcut icon" href="images/favicon.ico" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900'
	rel='stylesheet' type='text/css'>
	<script src="scripts/skel.min.js"></script>
	<script src="scripts/init.js"></script>

	<noscript>
		<link rel="stylesheet" href="/css/style.css">
	</noscript>
</head>

<!-- Body -->
<body class="homepage">

	<!-- Header Part -->
	<div id="header">
		<div id="nav-wrapper">
			<!-- Nav -->
			<nav id="nav">
				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li class="active"><a onClick="ScrollToBottom();" >About</a></li>
				</ul>
			</nav>
		</div>
		<div class="container">

			<!-- Logo -->
			<div id="logo">
				<h1><a href="#">Days Off</a></h1>
			</div>
		</div>
	</div>
	<?php echo $message; ?>

	<!-- Main Body -->
	<div id="main">
		<div id="content" class="container">

			<fieldset style="width:30%"><legend>LOG-IN HERE</legend>

				<form method="POST" action="routes/users.php">
					Employee ID: <input type="text" name="empID" size="30" placeholder="21234"><br/>
					Password: <input type="password" name="password" size="30" placeholder="********"><br/><br/>
					<input id="button" type="submit" name="submit" value="Log-In">
				</form>
			</fieldset>
			<p>
				New here? <a href="routes/changepassword.php">Generate/Change Password</a>
			</p>
			<img src="images/photos.jpg" alt="Bad Coding">
		</div>
	</div>

	<!-- Footer Part -->
	<div id="footer">
		<div class="container">
			<section>
				<img src="images/GoPro_logo.png" alt="GoPro Logo"><br/>
				Found a Bug? Report me!
					<span class="inline"></span>
				<a href="mailto:ashish.kapoor@aricent.com">Ashish@Aricent</a>
			</section>
		</div>
	</div>

	<!-- Copyright -->
	<div id="copyright">
		<div class="container">

			<a href="https://www.aricent.com"> Design: &copy; 2015 Aricent Technologies (Holdings) Ltd. All Rights Reserved</a>
		</div>
	</div>
</body>

</html>
