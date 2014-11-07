<?php 
include('session.php');
{
	$amount = (is_numeric($_POST['amount']) ? (int)$_POST['amount'] : 0);
	$time = (is_numeric($_POST['time']) ? (int)$_POST['time'] : 0);;
	$details = mysql_query("SELECT * from login join donation on login.username=donation.username where login.username='$naam'");
	$num = mysql_num_rows($details);
	if(isset($_POST['save']))
	{
		$query = mysql_query("update donation set amount='$amount' where username='$naam'");
		$query1 = mysql_query("update donation set time='$time' where username='$naam'");
		header("Location:donation.php");
	}
}
 ?>