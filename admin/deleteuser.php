<?php
  require 'addb.php';
  $c_id=$_GET['id'];
  $sql="DELETE  FROM  customer WHERE customer_id='$c_id'";
  $result= mysqli_query($conn,$sql);
  if($result)
  {
    echo "data deleted";
	header("Location:dash.php");
  }
  else
  {
    echo "data not deleted";
    
  }
 
?>