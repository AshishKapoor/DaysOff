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
            <meta charset="utf-8">
            <title></title>
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
