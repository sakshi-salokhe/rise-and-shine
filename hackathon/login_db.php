<?php 
			session_start();
			$email = $_POST['email'];
			$password = $_POST['password'];
						
			if($email && $password)
			{
				require("connect.php");
				$query = mysql_query("SELECT * FROM register WHERE email = '$email'");
				$numrows = mysql_num_rows($query);
				if($numrows!==0)
				{
					while($row = mysql_fetch_assoc($query))
					{
						$dbemail = $row['email'];
						$dbpassword = $row['password'];
					}
					if($email==$dbemail && $password==$dbpassword)
					{
						//select id from table whwere uname=$nameoforg
						$query1 = mysql_query("SELECT id,status FROM register WHERE email='$email'");
						$a=mysql_fetch_row($query1);
						$_SESSION['id']=$a['0'];
						//echo $_SESSION['id'];
						
						$query2 = mysql_query("SELECT status FROM register WHERE email='$email'");
						$b=mysql_fetch_array($query2);
						if($b['status'] == "seeker")
						{
							echo "<script>window.open('seeker.php','_self')</script>";
						}
						else
						{
							echo "<script>window.open('hunter.php','_self')</script>";
						}	
							
					}
					else
					{
						echo"password incorrect";
					}
				}
				else 
					die ("that user does not exist.");
			}	
			else 
				die("Please enter the name of organization");
?>