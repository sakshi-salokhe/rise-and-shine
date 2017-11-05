<?php
	//define variables
	$dbhost="localhost";
	$dbuser="root";
	$dbpassword="";
	$dbdatabase="hack";
	
	//other site variables
	$config_baseurl="http://localhost/help_the_needy/home.php";
	
	$db=mysql_connect($dbhost,$dbuser,$dbpassword,$dbdatabase);
	if(!$db)
	{
		echo "Not connected to database";
	}
	$dbselect = mysql_select_db($dbdatabase,$db);
?>