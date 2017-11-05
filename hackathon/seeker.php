<!DOCTYPE html>

<head>
  <title>Hackathon!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/icon-font.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
</head>	

<body>
<div class="container-fluid">
  <div class="row">
    <!--<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> </div>-->
    
    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
		<br>
		<img src="image/Logo.png" alt="logo" width="250px" height="70px">
	</div>
	
	<div class="col-xs-4 col-sm-4 col-md-6 col-lg-6"> 
	</div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
	<br>
	<br>
	<?php
	//include_once("header_new.php");
		session_start();
	//$email = $_POST['email'];
		require("connect.php");
	//echo "Session Id is here";
	//echo $_SESSION['id'];
		$query = "SELECT name FROM register WHERE id =".$_SESSION['id'].";";
		$query = mysql_query($query);
		$name_new = mysql_fetch_array($query);
		echo $name_new['name'];
	?>
</div>	
</div>
<div class="row">
<div class ="col-xs-4 col-sm-4 col-md-4 col-lg-4"> </div>
<div class = "col-xs-2 col-sm-2 col-md-2 col-lg-2">
<br>
<br>
<input type="submit" value="Ask a question" class="btn btn-primary">
</div>
<div class = "col-xs-2 col-sm-2 col-md-2 col-lg-2">
<br>
<br>
<form action="user_filter.php">
<input type="submit" value="Search" class="btn btn-primary">
</form>
</div>
<div class ="col-xs-6 col-sm-6 col-md-6 col-lg-6"> </div>
</div>
<br>
<br>
<br>
<div class="row">
<div class="col-md-2 col-xs-2 col-sm-2 col-lg-2"></div>
<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
<b>Announcements:</b>
<br>
<textarea class="announce" name ="announce" style="border-color:white;width:100%;"></textarea>
</div>
<div class="col-md-2 col-xs-2 col-sm-2 col-lg-2"></div>
</div>
</div>
</body>