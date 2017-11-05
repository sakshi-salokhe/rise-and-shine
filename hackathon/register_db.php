<?php
require_once("connect.php");

$sql="insert into register (status,name,email,password) values ('$_POST[status]','$_POST[name]','$_POST[email]','$_POST[password]')";

if(!mysql_query($sql,$db)){
die('Error:'.mysql_error($db));
}
require_once("thankyou2.php");

mysqli_close($db);
?>