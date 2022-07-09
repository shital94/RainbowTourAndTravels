<?php
	$host="localhost";
	$username="root";
	$password="";
	$db_name="rainbow_tour";
	$conn = new mysqli($host, $username, $password,$db_name) or die("could not connect");
	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$uname=$_POST['username'];
echo($uname);
$uemail=$_POST['email'];
echo($uemail);
$upass=$_POST['Password'];
 $sql = "INSERT INTO sigin (username,email,password)VALUES ('$uname','$uemail','$upass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>