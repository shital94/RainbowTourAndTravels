<?php 
	//database connectivity
	$HostName = "localhost";
	$DBUserName = "root";
	$DBPassword = "";
	$DatabaseName = "rainbowtourstravel";
	
	//step 1 select database server to connect
	 $dbcon= mysqli_connect($HostName,$DBUserName,$DBPassword) or die(mysqli_error($dbcon));
	//echo "connected";
	//step 2 select database
	mysqli_select_db($dbcon,"user") or die(mysqli_error($dbcon));
	
?>
