<?php
include_once("header.php");
?>
<html>
<body>
<form action="categoryindb.php">
<div class="row">
<div class = "col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
<div class = "col-xs-3 col-sm-3 col-md-3 col-lg-3">
<br>
<br>
<b>Select organisation for:</b>
<br><br>
<select name = "organization">
  <option value="Select">--Select--</option>
  <option value="Funding">Funding</option>
  <option value="SW">Seminars / Workshops</option>
  <option value="Collaborate">Collaborate</option>
</select>
</div>
<div class = "col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
<div class = "col-xs-3 col-sm-3 col-md-3 col-lg-3">
<br>
<br>
<b>Select Domain:</b>
<br><br>
<select name = "domain">
  <option value="Select">--Select--</option>
  <option value="Funding">IT Industry</option>
  <option value="SW">Fashion</option>
  <option value="Collaborate">Food</option>
   <option value="Collaborate">Travel</option>
</select>
</div>
<div class = "col-xs-3 col-sm-3 col-md-3 col-lg-3">
<br>
<br>
<?php
require("connect.php");

$query = mysql_query("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");

//Count total number of rows
$rowCount = mysql_num_rows($query);
?>
<select name="country" id="country">
    <option value="">Select Country</option>
    <?php
    if($rowCount>0){
        while($row = mysql_fetch_assoc($query)){ 
            echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
        }
    }else{
        echo '<option value="">Country not available</option>';
    }
    ?>
</select>
<br>
<br>
<select name="state" id="state">
    <option value="">Select country first</option>
</select>
<br>
<br>
<select name="city" id="city">
    <option value="">Select state first</option>
</select>


</div>
<div class = "col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>
<br>
<br>
<center> <input type="submit" value="Submit" class="buttons" > </center>
</form>
</body>
</html>