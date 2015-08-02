<!-- PHP CODE -->
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

<!-- HTML DOM-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>login page</title>
    </head>
    <body>

    </body>
</html>
