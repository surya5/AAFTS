<?php 
include('session.php');
 ?>
<html>
<head>
	<title></title>
	<style>
	#social:hover 
	{
    	-webkit-transform:scale(1.1); 
		-moz-transform:scale(1.1); 
		-o-transform:scale(1.1); 
	}
	#social 
	{
		-webkit-transform:scale(0.8);
		-moz-transform:scale(0.8);
		-o-transform:scale(0.8); 
		-webkit-transition-duration: 0.5s; 
		-moz-transition-duration: 0.5s;
		-o-transition-duration: 0.5s;
	}           
	.social-fb:hover 
	{
		color: #3B5998;
	}
	.social-tw:hover 
	{
		color: #4099FF;
	}
	.social-gp:hover 
	{
		color: #d34836;
	}
	.social-em:hover
	{
		color: #f39c12;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css">
</head>
<body>
	<script type="text/javascript" src="dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="dist/js/npm.js"></script>
	<nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="profile.php"><?php echo $name; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="donation.php">Donation Info</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav" style="float:right;">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
<<<<<<< HEAD
    <br><br><br><br><br><br>
=======
    <hr><hr><hr><hr> <hr><hr>
>>>>>>> c08bc8f98a387c4967f432e2ef02cd7db718710e
    <center>
    	<div>
    		<h1>AVANA Club</h1><p>Indian Institute of Technology <br>Indore <br> Madhya Pradesh <br></p>
    	</div>
    </center>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<div class="container">
        <div class="text-center center-block">
<<<<<<< HEAD
            <br>
=======
            <br />
>>>>>>> c08bc8f98a387c4967f432e2ef02cd7db718710e
                <a href="https://www.facebook.com/AvanaPage"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
	            <a href="https://twitter.com"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
	            <a href="https://plus.google.com"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
	            <a href="mailto:surya.thogaru@gmail.com"><i id="social" class="fa fa-envelope-square fa-3x social-em"></i></a>
		</div>
<<<<<<< HEAD
    	<br>
=======
    	<hr>
>>>>>>> c08bc8f98a387c4967f432e2ef02cd7db718710e
	</div>
</body>
</html>