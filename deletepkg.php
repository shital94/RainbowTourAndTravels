<?php  
 
require_once("db_conection.php");  
$delete_id=$_GET['del'];  
$delete_query="delete from user WHERE id='$delete_id'";//delete query  
$run=mysqli_query($dbcon,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('view-user.php?deleted=user has been deleted','_self')</script>";  
}  
  
?> 