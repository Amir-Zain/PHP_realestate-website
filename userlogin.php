<?php
session_start();
include("dbconnection.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$a=$_POST['email'];
	$b=$_POST['password'];


	$query=mysqli_query($conn,"SELECT * FROM user_tb WHERE email='$a' and password='$b'  ");
	$row=mysqli_fetch_assoc($query);
	$_SESSION['email']=$row['email'];
	$count=mysqli_num_rows($query);
    
	if($count==1)
	{
		$_SESSION['usertype']=array(
		'id'=>$row['id'],
		'email'=>$row['email'],
		'name'=>$row['name'],
		'password'=>$row['password'],
		'user'=>$row['user']
		);
		$user=$_SESSION['usertype']['user'];
		//$user1=$_SESSION['email']['email'];
		//redirecting User based Page
		switch($user)
		{
			case 'Buyer':
				header("location:buyerhome.php");
			break;
			case 'Seller':
				header("location:sellerhome.php");
			break;			
		}
	}
		else
		{

			$_SESSION['error']="Your Password or Email is not Found";
			header("location:index.php?Your PassWord/Email is not Found");
		}	

}
?>