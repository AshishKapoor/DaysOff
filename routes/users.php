<?php
$link = mysqli_connect("localhost", "aricent", "root", "aricent");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$eventDate = mysqli_real_escape_string($link, $_POST['dropdown_Date']);
$eventMonth = mysqli_real_escape_string($link, $_POST['dropdown_Month']);
$eventYear = mysqli_real_escape_string($link, $_POST['dropdown_Year']);
$eventReason = mysqli_real_escape_string($link, $_POST['reason']);

// $date = "$eventYear";
// $date .= "-$eventMonth"
// $date .= "-$eventDate";

$date = "2015-08-06";

// attempt insert query execution
$sql = "INSERT INTO events (date, reason)
VALUES('$date', '$eventReason')";

if(mysqli_query($link, $sql)){
    echo "Leave applied successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>

<!-- TODO Events input from this page
1. Create an html page included css for the individual Aricent Employees
2. Single user login from the database connectivity with sessions and cookies
3. Create a form with drop down buttons for taking inputs "Day","Month","Year" (include logic calendar logic here)
4. Connect the form with events.db in relationship with the "dates".
5. User will be able to apply for Leaves.
-->



<!DOCTYPE html>
<html>
<head>
    <title>Aricent - Days Off</title>
    <link rel="stylesheet" href="/css/users.css" charset="utf-8">
</head>

<body>
    <div class="header">

        <h1> <font color="white">Welcome User!</font></h1>

    </div>
    <div align="center" class="leave_date">
    <form action="users.php" method="post">

            <h3>Apply your leave plan</h3>
                    <br>
                    From
                        <input type="text" name="name" placeholder="2015/12/31">
                    Till
                        <input type="text" name="name" placeholder="2015/12/31">
                        <br>
                        <label>Reason:</label>
                        <textarea rows="5" cols="30" name="reason" placeholder="Enter reason here..."></textarea>
                        <br>
                        <input type="submit" name="submit" value="Submit">
                        <input type="button" name="cancel" value="Cancel">
                </div>
            </form>
            <!-- Copyright -->
            <div id="copyright">
                <div class="container">
                    <font color="white">Design: &copy; 2015 Aricent Technologies (Holdings) Ltd. All Rights Reserved</font>
                </div>
            </div>
        </body>
        </html>
