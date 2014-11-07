<?php 

$con=mysql_connect("localhost","root","") or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db("avana",$con) or die("Failed to connect to MySQL: " . mysql_error());
 ?>