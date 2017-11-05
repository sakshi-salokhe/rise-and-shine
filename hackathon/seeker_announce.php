<?php
	$query = mysql_query("SELECT announce FROM announce");
	$numrows = mysql_num_rows($query);
	if($numrows>0)
				{
					while($row = mysql_fetch_assoc($query))
					{
						echo$row['announce'];?><br>
						<?php
						//$query2 = mysql_query("SELECT announce FROM announce");
						//$b=mysql_fetch_array($query2);
					}
					//echo $b['announce'];
				}
	else
		echo "Error";
?>