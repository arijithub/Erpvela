<?php
session_start();
$con = mysqli_connect("localhost","root","","erpdb");
if (!empty($_POST)) {

   $user=$_POST['user'];
     $_SESSION['us']=$user;
     $users= $_SESSION['us'];
   $sql="SELECT selling_price,totprice,product_full_name FROM products where product_full_name='$users'";
   if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    echo $row[0].' '.$row[1].' '.$row[2];
    
    }
  // Free result set
  mysqli_free_result($result);
}
mysqli_close($con);
}
    ?>