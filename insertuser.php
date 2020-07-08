<?php
	include('dbconnection.php');
$a=mysqli_real_escape_string($conn,$_REQUEST['user']);
$b=mysqli_real_escape_string($conn,$_REQUEST['name']);
$c=mysqli_real_escape_string($conn,$_REQUEST['mobile']);
$d=mysqli_real_escape_string($conn,$_REQUEST['place']);
$e=mysqli_real_escape_string($conn,$_REQUEST['email']);
$f=mysqli_real_escape_string($conn,$_REQUEST['password']);
$g=mysqli_real_escape_string($conn,$_REQUEST['pname']);
$h=mysqli_real_escape_string($conn,$_REQUEST['price']);





$sql="INSERT INTO user_tb(user,name,mobile,place,email,password,pname,price)VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";

if(mysqli_query($conn,$sql))
{
	header("location:index.php?payment succesfull");
}else
{
	echo "ERROR:Payment Failed".mysqli_error($conn);
}
mysqli_close($conn);



?>
