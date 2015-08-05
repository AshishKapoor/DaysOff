<!-- TODO
	1. Validate Employee ID and Password to login as a User or Admin
	2. 
	3.
	4.
	5.

 -->

<!DOCTYPE html>
<html>
<head>
	<title>Aricent - Days Off</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900'
	rel='stylesheet' type='text/css'>
	<script src="scripts/skel.min.js"></script>
		<script src="scripts/init.js"></script>

		<noscript>
			<link rel="stylesheet" href="/css/login.css">
		</noscript>
</head>
	<body>

	</body>
</html>

<?php
	//redirection function
	function redirect_to($new_location){
		header("Location: " . $new_location);
		exit;
	}

	//Login form validation and redirection.
	if (isset($_POST["submit"])){
		//form submitted successfully
		$username = $_POST["username"];
		$password = $_POST["password"];
		echo "{$username}:{$password}";
		if ($username == "40230" && $password == "admin"){
			//Success in Logging in.
			redirect_to("admin.php");
		}
		elseif ($username == "40230" && $password == "password"){
			//Success in Logging in.
			redirect_to("users.php");
		} else {
			$username = $_POST["username"];
			$message = "Please log in.";
		}
	}
	?>
