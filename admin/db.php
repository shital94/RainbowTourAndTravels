

<?php 
	//database connectivity
	$HostName = "localhost";
	$DBUserName = "root";
	$DBPassword = "";
	$DatabaseName = "rainbow_tour";
	
	//step 1 select database server to connect
	$link = mysqli_connect($HostName,$DBUserName,$DBPassword) or die(mysqli_error($link));
	echo "connected";
	//step 2 select database
	mysqli_select_db($link,$DatabaseName) or die(mysqli_error($link));
	echo"ata";
?>
