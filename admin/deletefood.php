<?php
  require 'addb.php';
  $f_id=$_GET['id'];
  $sql="DELETE  FROM  food WHERE food_id='$f_id'";
  $result= mysqli_query($conn,$sql);
  if($result)
  {
    echo "data deleted";
  }
  else
  {
    echo "data not deleted";
    
  }
 
?>