<?php
include_once("header_new.php");

require("connect.php");
//$announce = $_POST['announce'];
$sql="insert into announce (announce) values ('$_GET[announce]')";

if(!mysql_query($sql,$db)){
die('Error:'.mysql_error($db));
}
?>

<html>
<br>
<br>
<br>
<br>
<br>
<br>
<h4> <center>Thank you! </center></h4>
<?php
mysql_close($db);

?>