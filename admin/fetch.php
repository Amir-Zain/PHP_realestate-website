<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "realestate");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM product_tb 
  WHERE name LIKE '%".$search."%'
  OR id LIKE '%".$search."%' 
  OR bhk LIKE '%".$search."%' 
  OR price LIKE '%".$search."%' 
  
 ";
}
else
{
 $query = "
  SELECT * FROM product_tb ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Property Code</th>
     <th>Seller Name</th>
     <th>Mobile</th>
     <th>Place</th>
     <th>Property</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["mobile"].'</td>
    <td>'.$row["place"].'</td>
    <td>'.$row["ptype"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>