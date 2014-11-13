<?php 

<<<<<<< HEAD
$con=mysql_connect("localhost","root","") or die("Failed to connect " . mysql_error()); 
$db=mysql_select_db("avana",$con) or die("Failed to connect " . mysql_error());
=======
$con=mysql_connect("localhost","root","") or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db("avana",$con) or die("Failed to connect to MySQL: " . mysql_error());
>>>>>>> c08bc8f98a387c4967f432e2ef02cd7db718710e
 ?>