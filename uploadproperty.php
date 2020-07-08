<?php 
 $db=mysqli_connect("localhost","root","","realestate");

 $msg="";

 if(isset($_POST['upload']))
 {
 	$photo=$_FILES['photo']['name'];

 	$a=mysqli_real_escape_string($db,$_POST['name']);
 	$b=mysqli_real_escape_string($db,$_POST['mobile']);
 	$c=mysqli_real_escape_string($db,$_POST['place']);
 	$i=mysqli_real_escape_string($db,$_POST['email']); 	
 	$d=mysqli_real_escape_string($db,$_POST['ptype']);
 	$e=mysqli_real_escape_string($db,$_POST['bhk']);
 	$f=mysqli_real_escape_string($db,$_POST['bathroom']);
 	$p=mysqli_real_escape_string($db,$_POST['sqft']);
 	$g=mysqli_real_escape_string($db,$_POST['price']);
 	$h=mysqli_real_escape_string($db,$_POST['paddress']);
 	$target="uploads/".basename($photo);

 	$sql="INSERT INTO product_tb(name,mobile,place,email,ptype,photo,bhk,bathroom,sqft,price,paddress) VALUES('$a','$b','$c','$i','$d','$photo','$e','$f','$p','$g','$h')";
 	header("location:sellerhome.php");

  mysqli_query($db,$sql);

  if (move_uploaded_file($_FILES['photo']['tmp_name'],$target)) {
    
  }
  else{
    $msg="Failed To upload image";
  }


    
 }



 ?>