<?php 
include('session.php');
{
	$amount1 = (is_numeric($_POST['amount']) ? (int)$_POST['amount'] : $amount);
	$time1 = (is_numeric($_POST['time']) ? (int)$_POST['time'] : $time);
	if(isset($_POST['save']))
	{
		$query = mysql_query("update donation set amount='$amount1', time='$time1' where username='$naam'");
		header("Location:donation.php");
	}
}
 ?>