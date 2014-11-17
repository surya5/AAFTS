<?php 
include('session.php');
{
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$Email = $_POST['Email'];
	$Name = $_POST['Name'];
	$Profession = $_POST['Profession'];
	$Department = $_POST['Department'];
	$DOB = $_POST['DOB'];
	$Gender = $_POST['Gender'];
	$Phone = $_POST['Phone'];
	if(isset($_POST['cancel']))
	{
		header("Location:profile.php");
	}
	else if(isset($_POST['save']))
	{
		$fetch = mysql_query("select * from login where username='$Username'");
		$count = mysql_num_rows($fetch);
		if($count=="")
		{
			$query1 = mysql_query("insert into login values ('$Username', '$Password')");
			$query2 = mysql_query("insert into donation values ('$Username', 0, 1, 0)");
			$query3 = mysql_query("insert into userinfo values ('$Username', '$Name', '$Department','$DOB', '$Email', '$Phone', '$Gender', '$Profession')");
			header("Location:register.php");
		}
		else
		{
			echo "<script>alert('Username already exists!');window.history.go(-1);</script>";
		}
	}
}
 ?>