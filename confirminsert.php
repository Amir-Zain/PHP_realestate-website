<?php 
 include("dbconnection.php");

 $a=mysqli_real_escape_string($conn,$_REQUEST['pcode']);
 $b=mysqli_real_escape_string($conn,$_REQUEST['name']);
 $c=mysqli_real_escape_string($conn,$_REQUEST['mobile']);
 $d=mysqli_real_escape_string($conn,$_REQUEST['email']);
 $e=mysqli_real_escape_string($conn,$_REQUEST['place']);

 $sql="INSERT INTO interest_tb(pcode,name,mobile,email,place) VALUES ('$a','$b','$c','$d','$e')";
 if(mysqli_query($conn,$sql))
{
	header("location:buyerhome.php");
}else
{
	echo "ERROR:Payment Failed".mysqli_error($conn);
}
mysqli_close($conn);




 ?>