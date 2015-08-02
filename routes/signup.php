<html>
<head>
<title>Register</title>
</head>
<body>
<form action="index.html">
        Username:
        <input type="username" name="username" />
        Password:
        <input type="password" name="password" />
        &nbsp;
        <input type="submit" name="submit" value="Sign Up" />
</div>
</form>

<?php
if (isset($_POST['submit']))
    {
    include 'db.php';

                    $fname=$_POST['fname'];
                            $lname=$_POST['lname'];
                    $address=$_POST['address'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];

         mysql_query("INSERT INTO student(fname,lname,address,username,password)
         VALUES ('$fname','$lname','$address','$username','$password')");
            }
?>
</...
