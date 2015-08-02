<!-- PHP CODE -->
<?php
    //Create database connection
    $dbhost       = 'localhost';
    $dbuser       = 'aricent';
    $dbpass       = 'root';
    $dbname       = 'aricent';
    $port         = 8889;

    $connection     = mysql_connect("$host:$port",$user,$password,$dbname);
    $db_selected    = mysql_select_db($db,$link);

    //Connection test
    if (mysqli_connect_error()){
        die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno().")"
        );
    }
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection,$query)
        echo $result;
        if (!$result){
            die("Database query failed");
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
