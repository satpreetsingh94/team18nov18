<?php
error_reporting(0);
session_start();
require('confige.php');

$qry = mysql_query("select * from student where emailid = '".$_POST['email']."' and password = '".$_POST['password']."'");


$val = mysql_fetch_array($qry);
if($val != ''){
	$_SESSION['loginuser']  = $val['id'];
	$_SESSION['loginusername']  = $val['fullname'];

	


	
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
			exit;
}
else{
	echo '<meta http-equiv="refresh" content="0; url=login.php?wrong=access">';
			exit;
}

?>