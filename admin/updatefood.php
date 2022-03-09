<?php require 'adhead.php'; ?>
<?php require 'addb.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$na = isset($_GET['na']) ? $_GET['na'] : '';
$ty = isset($_GET['ty']) ? $_GET['ty'] : '';
$des = isset($_GET['des']) ? $_GET['des'] : '';
$pr = isset($_GET['pr']) ? $_GET['pr'] : '';
?>
<html>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="adstyle.css">
				<link rel="preconnect" href="https://fonts.gstatic.com">
					<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<form action="" method="GET">
		<div class="row">
		<div class="col">
		  <label for="exampleInputname1">Food ID:</label>
			<input id="exampleInputname1" type="text"  value="<?php echo $id ?>" name="id"  class="form-control" >
		  </div>
		  <div class="col">
		  <label for="exampleInputname">Food Name:</label>
			<input id="exampleInputname" type="text"  value="<?php echo $na ?>" name="name" class="form-control"  >
		  </div>
		  <div class="col">
		  <label for="exampleInputtype">Food Type:</label>
			<input id="exampleInputtype" type="text" value="<?php echo $ty ?>" name="type" class="form-control"  >
		  </div>
		  <div class="col">
		  <label for="exampleInputdescription">Description:</label>
			<input id="exampleInputdescription" type="text" value="<?php echo $des ?>" name="descrip" class="form-control"  >
		  </div>
		  <div class="col">
		  <label for="exampleInputprice">Price:</label>
			<input id="exampleInputprice"type="text" name="price" value="<?php echo $pr ?>" name="price" class="form-control"  >
		  </div>
		</div><br> <br>
		<button class="btn btn-warning" type="submit" name="submit" value="update" > Update </button><br>
	</form>
</html>
<?php //require 'addb.php';
if(isset($_GET['submit']));
{
$id = isset($_GET['id']) ? $_GET['id'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
$type = isset($_GET['type']) ? $_GET['type'] : '';
$descri = isset($_GET['descrip']) ? $_GET['descrip'] : '';
$price = isset($_GET['price']) ? $_GET['price'] : '';
	$sql="UPDATE food SET food_id='$id',foodname='$name',foodtype='$type',description='$descri',price='$price' WHERE food.food_id = '$id' ";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
	//echo "<script>
					//alert('data updated!');
					//window.location.href='dash.php'
					//</script>";
	
	}
	else
	{
	echo"failed";
	}
}
 require 'adfoot.php'; ?>

