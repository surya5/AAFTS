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
    <style>
      .user-row {
          margin-bottom: 14px;
      }

      .user-row:last-child {
          margin-bottom: 0;
      }

      .dropdown-user {
          margin: 13px 0;
          padding: 5px;
          height: 100%;
      }

      .dropdown-user:hover {
          cursor: pointer;
      }

      .table-user-information > tbody > tr {
          border-top: 1px solid rgb(221, 221, 221);
      }

      .table-user-information > tbody > tr:first-child {
          border-top: 0;
      }


      .table-user-information > tbody > tr > td {
          border-top: 0;
      }
      .toppad
      {margin-top:20px;
      }
    </style>
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
    </nav><br><br>
    <!-- <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $name; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="contact.png" class="img-circle"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <form class="col-md-12" method="POST" action="savechanges.php">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Amount</label>
                        <div class="col-sm-10">
                          <select name="amount" class="form-control">
                            <option>30</option>
                            <option>60</option>
                            <option>100</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Time</label>
                        <div class="col-sm-10">
                          <select name="time" class="form-control">
                            <option>1</option>
                            <option>3</option>
                            <option>6</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="save">Save Changes</button>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" role="form" method="POST" action="savechanges.php">
        <fieldset>
          <legend>Settings</legend>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Amount</label>
            <div class="col-sm-10">
              <select name="amount" class="form-control">
                <option>30</option>
                <option>60</option>
                <option>100</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Time</label>
            <div class="col-sm-10">
              <select name="time" class="form-control">
                <option>1</option>
                <option>3</option>
                <option>6</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-default" name="cancel">Cancel</button>
                <button type="submit" class="btn btn-primary" name="save">Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
</body>
</html>