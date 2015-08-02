<?php
if (isset($_POST['submit']))
    {
    include 'databases.php';
                    $username=$_POST['username'];
                    $password=$_POST['password'];

         mysql_query("INSERT INTO users(username,password)
         VALUES ($username','$password')");
            }
?>

<html>
<head>
<title>Register</title>
</head>
<body>


<form action="" method="post">
        Aricent ID :
        <input type="username" name="username" /><br/>
        Password :
        <input type="password" name="password" /><br/>
        &nbsp;
        <input type="submit" name="submit" value="Sign Up" />
</div>
</form>
</body>
</html>
