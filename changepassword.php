<?php 
include('session.php');
{
  $exist = $_POST['exist'];
  $new = $_POST['new'];
  if(isset($_POST['cancel']))
  {
    header("Location:profile.php");
  }
  else if(isset($_POST['save']))
  {
    $pass = mysql_query("select * from login where username='$naam'");
    $row = mysql_fetch_array($pass);
    if($exist == $row['password'])
    {
      $update = mysql_query("update login set password='$new' where username='$naam'");
      echo "Done";
      header("Location:profile.php");
    }
    else
    {
      echo "<script>alert('Wrong existing password!');window.history.go(-1);</script>";
    }
  }
}
 ?>