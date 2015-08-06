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
    <form id="form_changepassword">
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
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="*******"></td>
            </tr>
            <tr>
                <td>Verify Password</td>
                <td><input type="password" name="verfy_password" placeholder="*******"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="button" name="submit" value="Set Password"></td>
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
