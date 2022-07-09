<?php


	session_start();
	/*if(!$_SESSION['login_user'])
	{
		header("Location:index.php?notlogin=you are not administrator");
	}
	else
	{*/
		echo "<h3>welcome :".$_SESSION["login_user"]."</h3>";
		echo "<a href='logout.php'>Logout</a>";
	/*}*/
?>