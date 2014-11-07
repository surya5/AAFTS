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
    <form class="col-md-12" method="POST" action="savechanges.php">
        <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Amount" name="amount">
        </div>
        <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Time Interval" name="time">
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="save">Save Changes</button>
        </div>
    </form>
</body>
</html>