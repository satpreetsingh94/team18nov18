<?php 

	$hostname = "localhost";
	$username = "team18nov18";
	$password = "Password1";
	
	$db_handle = mysql_connect($hostname , $username ,$password) or die("unable to connect mysql");
	$selected = mysql_select_db("team18nov18_wa",$db_handle) or die("could not connect DB");
	
?>
	 