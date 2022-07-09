
<?php
	
	//include './db.php';
	require_once("db.php");
	if(isset($_POST["sub"]))
	{
		$username=$_POST["txtuser"];
		$password=md5($_POST["txtpass"]);
		
		$query = "select * from login where username='$username' and password='$password'";
		$exe_query = mysqli_query($link,$query);
		$found_num_rows = mysqli_num_rows($exe_query);
		
	
	
		if($found_num_rows == 1)
		{
			echo 'Login Successfully...!!';
			$_SESSION['login_user']=$username;
			//header("Location:welcome.php");
			
		}
		else
		{
			//header("Location:index.php?logout=Incorrect your username and password");
		}
	
	}
	
?>