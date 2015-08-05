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
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900'
  rel='stylesheet' type='text/css'>
  <script src="scripts/skel.min.js"></script>
    <script src="scripts/init.js"></script>

    <noscript>
      <link rel="stylesheet" href="/css/changepassword.css">
    </noscript>
</head>

<body>
      <form id="signup">
        <div class="header" position="absolute" top="100px" left="150px" >
          <h2 >Sign Up</h2>

        <div>

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
            <td><input type="button" name="submit" value="Register"></td>
            </tr>
          </table>
      </form>
  </body>
</html>
