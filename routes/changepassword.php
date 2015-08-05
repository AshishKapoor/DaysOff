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
    <style media="screen">
    .header{
        background: black;
        margin: auto;
        padding: 10px;
        text-align: center;
    }
    h1{
        float:inherit;
        margin:auto;
        padding: 30px;
        width: 350px;

    }
    table{
        float:inherit;
        margin:auto;
        padding: 80px;
        width: 300px;
        height: 300px;
        border: 3px solid black;
    }
    .h3_class{
        text-align: center;
    }
    </style>
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
                <td><input type="button" name="submit" value="Set Password"></td>
            </tr>
        </table>
    </form>
</body>
</html>
