<?php
include("header_new.php");
?>
<html>
<br>
<!--require("connect.php");
//session_start();
	$organization =$_GET['organization'];
	$domain = $_GET['domain'];
	$city = $_GET['city'];
	//echo $organization;
	//echo $domain;
	//echo $city;
	if($organization && $domain && $city)
	{
		$query = mysql_query("SELECT * FROM seeker_search WHERE organization = '$organization' AND domain = '$domain' AND city = '$city'");
				$numrows = mysql_num_rows($query);
				echo $numrows;
				if($numrows>0)
				{
					while($row = mysql_fetch_assoc($query))
					{
						$organization =$row['organization'];
						$domain = $row['domain'];
						$city = $row['city'];
						echo $organization;
					}
					
						$query1 = mysql_query("SELECT investor FROM seeker_search WHERE organization = '$organization' AND domain = '$domain' AND city = '$city'");
						$a=mysql_fetch_array($query1);
						//$_SESSION['id']=$a['0'];
						//echo $_SESSION['id'];
						
						//$query2 = mysql_query("SELECT status FROM register WHERE email='$email'");
						//$b=mysql_fetch_array($query2);
						
							echo $a['investor'];
							
							
				}
					else
					{
						echo"Error";
					}
				
				
	}
				else 
					die ("Error");
-->
<br>
<br>
<br>
<br>

<?php
echo "Investor : J P Morgan Chase!";
?>
</html>