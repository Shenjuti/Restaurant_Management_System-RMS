<?php require 'adhead.php'; ?>
<?php require 'addb.php';
 if(isset($_POST['insert']))
 {
   $id = $_POST['food_id'];
   $name=$_POST['foodname'];
   $type=$_POST['foodtype'];
   $description=$_POST['description'];
   $price=$_POST['price'];
    $sql = "INSERT INTO food(food_id,foodname, foodtype,description, price ) VALUES ('$id','$name','$type','$description','$price')";
     $insert= mysqli_query($conn,$sql);
     if($insert)
     {
        echo "<script>
        alert('Successfully innserted')
        </script>"
        ;
     }
     
   
   else
   {
      echo "<script>
      alert('not insertted'); 
      </script>";
   }
 
}

?>
<html>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="adstyle.css">

				<link rel="preconnect" href="https://fonts.gstatic.com">
					<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<form action="" method="post">
		<div class="row">
		<div class="col">
		  <label for="exampleInputid">Food ID:</label>
			<input id="exampleInputid" type="text" name="food_id" class="form-control" placeholder="foodid" >
		  </div>
		  <div class="col">
		  <label for="exampleInputname">Food Name:</label>
			<input id="exampleInputname" type="text" name="foodname" class="form-control" placeholder="foodname" >
		  </div>
		  <div class="col">
		  <label for="exampleInputtype">Food Type:</label>
			<input id="exampleInputtype" type="text" name="foodtype" class="form-control" placeholder="foodtype" >
		  </div>
		  <div class="col">
		  <label for="exampleInputdescription">Description:</label>
			<input id="exampleInputdescription" type="text" name="description" class="form-control" placeholder="description" >
		  </div>
		  <div class="col">
		  <label for="exampleInputprice">Price:</label>
			<input id="exampleInputprice"type="text" name="price" class="form-control" placeholder="price" >
		  </div>
		</div><br> <br>
		<button class="btn btn-warning" type="submit" name="insert"> Insert </button><br>
	</form>
</html>
<?php require 'adfoot.php'; ?>