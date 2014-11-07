<?php 
session_start();
 ?>
 <html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css">
</head>
<body>
	<script type="text/javascript" src="dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="dist/js/npm.js"></script>
	<div class="container">
		<div class="page-header">
		    <h1>AVANA <small>Automated Fund Transfer System</small></h1>
		</div>

		<form class="col-md-12" method="POST" action="login.php">
		    <div class="form-group">
		        <input type="text" class="form-control input-lg" placeholder="Email" name="username">
		    </div>
		    <div class="form-group">
		        <input type="password" class="form-control input-lg" placeholder="Password" name="password">
		    </div>
		    <div class="form-group">
		        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Sign In</button>
		    </div>
		</form>
	</div>
</body>
</html>