<!DOCTYPE HTML>
<!--
	DaysOff Application By Ashish Kapoor
-->
<html>
	<head>
		<title>Aricent - Days Off</title>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="scripts/skel.min.js"></script>
		<script src="scripts/skel-panels.min.js"></script>
		<script src="scripts/init.js"></script>

		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		    <link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
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
				<img src="images/GoPro_logo.png" alt="GoPro Logo">
			<form name="login_form" action="routes/login.php" method="post">
					<label>Aricent ID :</label>
					<input id="name" name="username" placeholder="Aricent ID" type="text" value=""><br />
					<label>Password :</label>
					<input id="password" name="password" placeholder="**********" type="password"><br />
					<input name="submit" type="submit" value="Login">
					<input name="clear" type="button" value="Clear">
			</form>
			<p>
				New here? <a href="routes/signup.php">Register!</a>
			</p>
			<img src="images/photos.jpg" alt="Bad Coding">
			</div>
		</div>

	<!-- Tweet of the Day -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>"Always inform before you take off". ~ 127 hours [The Movie]</blockquote>
				</section>
			</div>
		</div>

	<!-- Footer Part -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<p>
							found a bug?
						</p>
						<h2>Report Me</h2>
						<span class="inline"></span>
					</header>
						<a href="mailto:ashish.kapoor@aricent.com">Ashish@Aricent</a>
				</section>
				<img src="images/me.jpg" alt="Bad Coding">

			</div>
		</div>

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="https://www.aricent.com"> &copy; 2015 Aricent Technologies (Holdings) Ltd. All Rights Reserved</a>
			</div>
		</div>
	</body>
</html>
