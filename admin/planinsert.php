<?php 
include("dbconnection.php");
$a=mysqli_real_escape_string($conn,$_REQUEST['pname']);
$b=mysqli_real_escape_string($conn,$_REQUEST['duration']);
$c=mysqli_real_escape_string($conn,$_REQUEST['price']);

$sql="INSERT INTO plan_tb(pname,duration,price) VALUES ('$a','$b','$c')";

if(mysqli_query($conn,$sql))
{
	header("location:addplan.php");
}
else
{
	echo "Error:".mysqli_error($conn);
}
mysqli_close($conn);





 ?>