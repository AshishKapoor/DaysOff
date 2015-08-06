<?php
//redirection function
session_start();

if ($_POST["submit"]){
	include_once("routes/connection.php");

	$empId = strip_tags($_POST["emp_id"]);
	$password = strip_tags($_POST["password"]);

	$sql = "SELECT emp_id, password FROM users WHERE emp_id = '$empId' AND password = '$password'";
	$query = mysql_query($dbCon,$sql);

	if ($query){
		$row = mysql_fetch_row($query);
		$dbId = $row[0];
		$dbEmpId = $row[1];
		$dbPassword = $row[2];
		echo "$dbEmpId $dbPassword";
	}

	if ($empId == $dbEmpId && $password == $dbPassword){
		//$_SESSION['empId'] = $empId;
		header("Location: routes/admin.php");
	} else {
		echo " Go ahead Log in";
	}
}

?>

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
			<img src="images/GoPro_logo.png" alt="GoPro Logo">
			<fieldset style="width:30%"><legend>LOG-IN HERE</legend>

				<form method="POST" action="routes/connection.php">
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

			<img src="images/gopro_icon.png" alt="Bad Coding">
			<section>
				Found a Bug? Report me!
					<span class="inline"></span>
				<a href="mailto:ashish.kapoor@aricent.com">Ashish@Aricent</a>
			</section>
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
