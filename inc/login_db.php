<?php

	$host="localhost";
	$username="root";
	$password="";
	$db_name="rainbow_tour";
	$conn = mysqli_connect($host, $username, $password,$db_name) or die("could not connect");
	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$uemail=$_POST['username'];
$sql = "SELECT * FROM sigin where email='$uemail'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
	
	
		header("Location:index.php");  //successfull login
	
	

}
else
	{
		header("Location:login.php");  //unsuccessfull login
	}
?>