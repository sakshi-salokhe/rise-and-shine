<?php
include_once("header.php");
?>

<div class="row" style="margin-left:15px;margin-right:15px;">
		
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		
			<h3 class="fontstyle"> Register Yourself! </h3>
			<br>
			
			<form role="form" action="insertreceive.php" method="post">
					<!--<div class="form-group">
						<label for="usr">Receiver Id:</label>
						<input type="name" name="rid" class="form-control" placeholder="unique ID">
					</div>--> 
					<div class="form-group">
						<label for="usr">Name Of Organization:</label>
						<input type="name" name="nameoforg" class="form-control" placeholder="Nirmaan">
					</div>
					<div class="form-group">
						<label for="usr">Head Of Organization:</label>
						<input type="name" name="head" class="form-control" placeholder="Mayur Lohia">
					</div>
					<div class="form-group">
						<label for="usr">Address:</label>
						<textarea class="form-control" name="address" rows="5" class="form-control">
						</textarea>
					</div>
					<div class="form-group">
						<label for="usr">Phone no:</label>
						<input type="tel" name="phoneno" class="form-control" placeholder="9028134567">
					</div>
					<div class="form-group">
						<label for="usr">Email id:</label>
						<input type="emailid" name="emailid" class="form-control" placeholder="abcd@xyz.com">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" name="password" class="form-control">
					</div>
				<br>
				<input type="submit" value="Register" class="buttons">
			</form>

		</div>

		
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		</div>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			
			<h3 class="fontstyle"> Existing User! </h3>
			<br>
			<form role="form" action="receiverlogin.php" method="POST">
					<div class="form-group">
						<label for="usr">Name Of Organization:</label>
						<input type="name" name="nameoforg" placeholder="Nirmaan" class="form-control">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" name="password" placeholder="password" class="form-control">
					</div>
				<br>
				<input type="submit" value="login" class="buttons" name="login">
			</form>
			
		</div>
</div>
<br>
<br>
<?php
include_once("footer.php");
?>