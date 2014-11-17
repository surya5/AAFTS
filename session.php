<?php 
include('db.php');
session_start();
$check = $_SESSION['login_username'];
$session = mysql_query("select * from login where username = '$check'");
$row = mysql_fetch_array($session);
$login_session = $row['username'];
if(!isset($login_session))
{
	header("Location:index.php");
}
$info = mysql_query("select * from login join userinfo on login.username = userinfo.username where userinfo.username='$check'");
$row1 = mysql_fetch_array($info);
$naam = $row1['username'];
$name = $row1['name'];
$dept = $row1['dept'];
$dob = $row1['dob'];
$email = $row1['email'];
$phone = $row1['phone'];
$gender = $row1['gender'];
$profession = $row1['profession'];
$donation = mysql_query("select * from login join donation on login.username = donation.username where login.username='$check'");
$row2 = mysql_fetch_array($donation);
$amount = $row2['amount'];
$time = $row2['time'];
$total = $row2['total'];
 ?>