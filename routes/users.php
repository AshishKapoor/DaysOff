<!-- TODO Events input from this page
1. Create an html page included css for the individual Aricent Employees
2. Single user login from the database connectivity with sessions and cookies
3. Create a form with drop down buttons for taking inputs "Day","Month","Year" (include logic calendar logic here)
4. Connect the form with events.db in relationship with the "dates".
5. User will be able to apply for Leaves.
-->

<!DOCTYPE html>
<html lang="en-US">
<head>
<style>

.leave_date {
    float:inherit;
    margin:auto;
    padding: 80px;
    width: 300px;
    height: 300px;
    border: 3px solid black;
}
h1 {
  float:inherit;
  margin:auto;
  padding: 30px;
  width: 350px;
}
h2{
  float:inherit;
  margin:auto;
  padding: 30px;
  width: 350px;
}

</style>
</head>
<body>

<h1>Welcome User!</h1>
<h2>Apply for the Leaves here.</h2>

<div class="leave_date">
  <h3>Inform Us:</h3>

      <label>Date:</label>
      <select name="dropdown_Date">
        <option value="1" selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
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
        <option value="Jan" selected>Jan</option>
        <option value="Feb">Feb</option>
        <option value="Mar">Mar</option>
        <option value="Apr">Apr</option>
        <option value="May">May</option>
        <option value="Jun">Jun</option>
        <option value="Jul">Jul</option>
        <option value="Aug">Aug</option>
        <option value="Sep">Sep</option>
        <option value="Oct">Oct</option>
        <option value="Nov">Nov</option>
        <option value="Dec">Dec</option>
      </select>
      <select name="dropdown_Year">
        <option value="2015" selected>2015</option>
        <option value="2016" >2016</option>
        <option value="2017" >2017</option>
        <option value="2018" >2018</option>
        <option value="2019" >2019</option>
        <option value="2020" >2020</option>
      </select>
      <br/><br/>
      <label>Reason:</label>
      <textarea rows="5" cols="30" name="description" placeholder="Enter reason here..."></textarea>
      <br/><br/>
      <input type="submit" name="name" value="Submit">
      <input type="button" name="name" value="Cancel">
    </table>

    </div>
  </body>
</html>
