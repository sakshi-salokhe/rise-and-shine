<!DOCTYPE html>
<html lang="en">
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
	<!-- ajax -->
	<script type="text/javascript">
	$(document).ready(function(){
		$('feedback').load('check.php').show();
		
		$('#username_input').keyup(function(){
			$.post('check.php',{ username: form.username.value },
			function(result) {
				$('#feedback').html(result).show();
			});
		});
	});
	</script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLtFTZctZo0HjSn4uIrdnj1RURrwAx2f8">
	</script>
	
	<script type="text/javascript" src="countries3.js">
	</script>
	<!-- map -->
	<script>
		function initialize(){
			var mapoptions = {
				zoom:15,
				center: new google.maps.LatLng(18.9139369,73.306342)
			};
		var map = new google.maps.Map(
			document.getElementById('map-canvas'),mapoptions);
		}
		function loadScript(){
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' + 'callback=initialize';
			document.body.appendChild(script);
		}
		window.onload = loadScript;
	</script>
	<!--google analytics-->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75804392-1', 'auto');
  ga('send', 'pageview');

</script>

<!--ajax for coiuntry state and city-->
<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
	<style>
	.fontstyle
	{
		font-family: Architects_Daughter;
	}
	.h2color
	{
		color:#635454;
	}
	</style>
</head>

<body>

<div class="container-fluid">
  <div class="row">
    <!--<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> </div>-->
    
    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
		<br>
		<img src="image/Logo.png" alt="logo" width="250px" height="70px">
	</div>
	
	<div class="col-xs-3 col-sm-3 col-md-5 col-lg-5"> 
	</div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> 
	<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       <!-- <li class="active"><a href="index.php">Home</a></li> -->
		<li><a href="register.php">Registration</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
	<!--<h2 class="fontstyle h2color" style="margin-left:0px;"> Help The Needy </h2>-->
	</div>
    <!--<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"> </div>-->
	
    </div>
	</div>
  <br>
 <!-- 
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
		<li><a href="gallery.php">Gallery</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Be A Part<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="donate.php">Donate</a></li>
            <li><a href="receive.php">Receive</a></li>
          </ul>
        </li>
        <li><a href="aboutus.php">About us</a></li>
      </ul>
    </div>
  </div>
</nav>
-->
</div>

