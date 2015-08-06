<!-- TODO
1. Create MySQL tables
2. Table users (Done) (user_id(PK),emp_id,password)
3. Table events (event_id(PK),date,reason)
4.
5.
-->
<!--
<?PHP
// $user       = "aricent";
// $pass       = "root";
// $db         = "aricent";
// $host       = "localhost";
// $dbCon      = mysql_connect($host, $user, $pass);
// $dbFound    = mysql_select_db($db, $dbCon);
//
// if ($dbFound) {
//     echo "Database Connected.";
//     //mysql_close($dbCon);
// }
// else {
//     echo "Database Not Connected.";
//     mysql_close($dbCon);
// }

// $user = 'aricent';
// $password = 'root';
// $db = 'aricent';
// $host = 'localhost';
// $port = 8889;
//
// $link = mysqli_init();
// $success = mysqli_real_connect($link,$host,$user,$password,$db,$port);
//
// if ($success){
//     echo "Database found";
// }
// else {
//     mysqli_close($success);
// }
?>
-->


<?php

function redirect_to($url) {
	header('Location: '.$url);
	exit();
}
define('DB_HOST', 'localhost');
define('DB_NAME', 'aricent');
define('DB_USER', 'aricent');
define('DB_PASSWORD','root');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['empID']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysql_query("SELECT *  FROM users where emp_id = '$_POST[empID]' AND password = '$_POST[password]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['empID']) AND !empty($row['password']))
	{
		$_SESSION['empID'] = $row['password'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
        redirect_to("routes/admin.php");
	}	else	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";

	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>
