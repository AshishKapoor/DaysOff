<!-- TODO
1. Create MySQL tables
2. Table users (Done) (user_id(PK),emp_id,password)
3. Table events (event_id(PK),date,reason)
4. 
5.
-->

<!-- PHP CODE -->
<?PHP
    $user_name = "aricent";
    $password = "root";
    $database = "aricent";
    $host = "localhost";
    $db_handle = mysql_connect($host, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);

    if ($db_found) {
        echo "Database Found ";
        mysql_close($db_handle);
    }
    else {
        echo "Database NOT Found ";
    }
?>

<!-- HTML CODE -->
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
          <link rel="stylesheet" href="/css/databases.css">
        </noscript>
    </head>
        <body>
            <?php
                //User Returned Data from the Database.
                while($row = mysqli_fetch_row($result))
                var_dump();
                echo "<hr/>"
            ?>
        </body>
    </html>

<?php
    //Closing database
    mysqli_close($connection);
 ?>
