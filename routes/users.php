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

    <form action="users.php" method="post">
        <div class="leave_date">
            <h3>Apply your leave plan</h3>
            <table border="1px solid black" >
                <tr>
                    <td><label>Date:</label></td>
                    <td>
                        <select name="dropdown_Date">
                            <option value="1" selected>01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select name="dropdown_Month">
                            <option value="Jan" selected>01</option>
                            <option value="Feb">02</option>
                            <option value="Mar">03</option>
                            <option value="Apr">04</option>
                            <option value="May">05</option>
                            <option value="Jun">06</option>
                            <option value="Jul">07</option>
                            <option value="Aug">08</option>
                            <option value="Sep">09</option>
                            <option value="Oct">10</option>
                            <option value="Nov">11</option>
                            <option value="Dec">12</option>
                        </select>
                        <select name="dropdown_Year">
                            <option value="2015" selected>2015</option>
                            <option value="2016" >2016</option>
                            <option value="2017" >2017</option>
                            <option value="2018" >2018</option>
                            <option value="2019" >2019</option>
                            <option value="2020" >2020</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label>Reason:</label></td>
                        <td><textarea rows="5" cols="30" name="reason" placeholder="Enter reason here..."></textarea></td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td><input type="submit" name="submit" value="Submit">
                            <input type="button" name="cancel" value="Cancel"></td>
                        </tr>
                    </table>
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
