<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "aricent", "root", "aricent");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$emp_Id = mysqli_real_escape_string($link, $_POST['name']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$re_password = mysqli_real_escape_string($link, $_POST['re_password']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($emp_Id)){

    }
}
// attempt insert query execution
$sql = "INSERT INTO users (emp_id,password) VALUES ('$emp_Id', '$password')";
if(mysqli_query($link, $sql)){
    echo "Account Created Successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>

<!-- TODO on ChangePassword Page
1. Connect Users (Password) field to be updated from Aricent ID
2.
3.
4.
5.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Aricent - Days Off</title>
    <link rel="stylesheet" href="/css/changepassword.css" charset="utf-8">
</head>

<body>
    <form id="form_changepassword" action="changepassword.php" method="post">
        <div class="header" position="absolute" top="100px" left="150px" >
            <h1> <font color="white">Change Password</font></h1>
        </div>
        <div class="h3_class">
        <h3 text-align="center">Generate password</h3>
        </div>
        <br/>
        <table border="1px solid black" border-collapse="collapse">
            <tr>
                <td>Employee ID</td>
                <td><input type="text" name="name" placeholder="40230"> </td>
                <span class="error">* <?php echo $nameErr;?></span>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="*******"></td>
                <span class="error">* <?php echo $nameErr;?></span>

            </tr>
            <tr>
                <td>Verify Password</td>
                <td><input type="password" name="verfy_password" placeholder="*******"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Set Password"></td>
            </tr>
        </table>
    </form>

    <!-- Copyright -->
    <div id="copyright">
        <div class="container">
            <font color="white">Design: &copy; 2015 Aricent Technologies (Holdings) Ltd. All Rights Reserved</font>
        </div>
    </div>
</body>
</html>
