<?php
include_once("header.php");
?>

<div class="row" style="margin-left:15px;margin-right:15px;">
		
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		
			<h3 class="fontstyle"> Register Yourself! </h3>
			<br>
			
			<form name="form" role="form" action="register_db.php" method="POST">
					<!--<div class="form-group">
						<label for="usr">UID:</label>
						<input type="number" name="uid" class="form-control" placeholder="uid">
					</div>-->
					<div class="form-group">
						<label for="usr"></label>
						<input type="radio" name="status" value="seeker" checked> Seeker&nbsp;&nbsp;
						<input type="radio" name="status" value="hunter"> Hunter<br>
					</div>
					<div class="form-group">
						<label for="usr">Name:</label>
						<input type="text" id="name" name="name" value="" class="form-control" placeholder="J_DEO">
						<div id="feedback"></div>
					</div>
					<div class="form-group">
						<label for="usr">Email id:</label>
						<input type="email" name="email" class="form-control" placeholder="abcd@xyz.com">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
				<br>
				<input type="submit" value="Register" class="buttons">
			</form>
		</div>

		
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		</div>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		
			
		</div>
</div>
<br>
<br>
<?php
include_once("footer.php");
?>