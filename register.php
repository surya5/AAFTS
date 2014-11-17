<?php 
include("session.php");
 ?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/sidebar.css">
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
            <li><a href="changepass.php">Change Password</a></li>
            <?php if($naam=="adminAAFTS@iiti.ac.in") echo "<li><a href='register.php'>Register new user</a></li>" ?>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav" style="float:right;">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav><br><br>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="container-fluid">
              <section class="container">
                <form class="form-horizontal" role="form" method="POST" action="newuser.php">
              <div class="container-page">        
                <div class="col-md-6">
                  <h3 class="dark-grey">Registration</h3>
                  
                  <div class="form-group col-lg-12">
                    <label>Username</label>
                    <input type="text" name="Username" class="form-control">
                  </div>
                  
                  <div class="form-group col-lg-6">
                    <label>Password</label>
                    <input type="password" name="Password" class="form-control">
                  </div>
                  
                  <div class="form-group col-lg-6">
                    <label>Email</label>
                    <input type="text" name="Email" class="form-control">
                  </div>
                  
                  <div class="form-group col-lg-12">
                    <label>Name</label>
                    <input type="text" name="Name" class="form-control">
                  </div>
                  
                  <div class="form-group col-lg-6">
                    <label>Profession</label>
                    <input type="text" name="Profession" class="form-control">
                  </div>
                  
                  <div class="form-group col-lg-6">
                    <label>Department</label>
                    <input type="text" name="Department" class="form-control">
                  </div> 

                  <div class="form-group col-lg-6">
                    <label>Date of Birth</label>
                    <input type="Text" name="DOB" class="form-control">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Phone</label>
                    <input type="Text" name="Phone" class="form-control">
                  </div> 

                  <div class="form-group col-lg-12">
                    <label>Gender</label>
                    <select name="Gender">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>

                  <div class="form-group col-lg-6">
                    <button type="submit" class="btn btn-primary" name="save">Register</button>
                    <button type="submit" class="btn btn-default" name="cancel">Cancel</button>
                  </div>       
                
                </div>
              </div>
            </form>
            </section>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
