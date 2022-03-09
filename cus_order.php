<?php require 'userhead.php'; ?>
<?php
session_start();
           require 'db.php';
		   $user_check = $_SESSION['login_user'];
			   
			   $ses_sql = mysqli_query($conn,"SELECT customer_id FROM customer WHERE username = '$user_check' ");
			   
			   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
			   
			   $customer_id = $row['customer_id'];
		   
		   if(isset($_GET['f_id']))
		    {
				$f_id=$_GET['f_id'];
				$sql= "SELECT * FROM food WHERE food_id=$f_id";
				$result = mysqli_query($conn,$sql);
				$check=mysqli_num_rows($result);
				//cheching is data is available
				if($check==1)
				{
					//echo 'have data';
					$fetch=mysqli_fetch_assoc($result);
					$f_name=$fetch['foodname'];
					$f_id=$fetch['food_id'];
					$price=$fetch['price'];
				}
				else
				{
					//echo 'database not have data';
				}
			}



   
?>
<html>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="reg&log.css">

				<link rel="preconnect" href="https://fonts.gstatic.com">
					<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<form action="" method="post" class="order">
	<fieldset>
		<h1>Selected Food</h1>
		<div class="food-menu-desc" >
		<label for="un"> Food Name: <?php echo  $f_name;?></label><br>
		<input type="hidden" name="foodname" value="<?php echo $f_name;?>">
		<label for="un"> Food ID: <?php echo  $f_id;?></label><br>
		<input type="hidden" name="food_id" value="<?php echo $f_id;?>">
		<label for="un"> Price: <?php echo $price;?></label><br>
		<input type="hidden" name="price" value="<?php echo $price;?>">
		</div>
		<div class="order-label">Quantity</div>
		<input type="number" name="qty" class="input-responsive" value="1" required>
		<br>
		</fieldset>
		<br>
		<fieldset>
		
		<h1>Details</h1>
		<div class="mb-3">
          <label for="un"> Full Name:</label>
          <input id="un" type="text" name="username" placeholder="full name" required><br>
        </div>
		<input type="hidden" name="customer_id" value="<?php echo $customer_id;?>">

        <div class="mb-3">
          <label for="exampleInputEmail1">Email address:</label>
          <input id="exampleInputEmail1" type="email" name="email" placeholder="@gmail.com" required><br>
        </div>

        <div class="mb-3">
          <label for="mb">Mobile:</label>
          <input id="mb" type="text" name="mobile" placeholder="mobile number" required><br>
        </div>
		</fieldset>
		<input type="submit" name="submit" class="btn btn-warning" value="Confirm Order">
	</form>
	<?php
	if(isset($_POST['submit']))
	{
				
		$food=$_POST['foodname'];
		$food_id=$_POST['food_id'];
		$price=$_POST['price'];
		$qty=$_POST['qty'];
		$total=$price*$qty;
		$cusname=$_POST['username'];
		$customer_id=$_POST['customer_id'];
		$em=$_POST['email'];
		$mb=$_POST['mobile'];
		$sql1="INSERT INTO `order`(`order_id`, `food`,`food_id`, `price`, `quantity`, `total`, `customer`,`customer_id`, `cus_email`, `cus_mobile`) VALUES (null,'$food','$food_id','$price','$qty','$total','$cusname','$customer_id','$em','$mb')";
	
	if (mysqli_query($conn, $sql1)) 
					{
                  
					
					echo "<script>
					alert('order placed successfully !');
					window.location.href='welcome.php'
					</script>";
                    } 
    else            {
                     echo "Error: " . $sql1 . "
                        " . mysqli_error($conn);
                    }
     mysqli_close($conn);
	
	
	}
?>	
	
</html>
<?php require 'head&foot/footer.php'; ?>