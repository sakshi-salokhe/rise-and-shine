<?php

require("connect.php");

$username = mysql_real_escape_string($_POST['username']);

$check = mysql_query("SELECT username FROM donate WHERE username='$username'");
$check_num_rows = mysql_num_rows($check);

if ($username==NULL)
	echo " Choose a username";
else if (strlen($username)<=3)
	echo "Too short";
else
{
	if ($check_num_rows==0)
		echo "Available";
	else if ($check_num_rows==1)
		echo "Not available!";
}

?>