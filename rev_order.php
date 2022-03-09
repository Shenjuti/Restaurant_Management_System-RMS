<?php require 'userhead.php'; ?>
<?php
session_start();
           require 'db.php';
		   $user_check = $_SESSION['login_user'];
			   
			   $ses_sql = mysqli_query($conn,"SELECT customer_id FROM customer WHERE username = '$user_check' ");
			   
			   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
			   
			   $customer_id = $row['customer_id'];?>
		   
		   
<html>


<body>
<h2>Your Order</h2>
<table class="table table-bordered" class="table-warning" >
<tr class="table-warning">
<th class="table-warning" >Food</th>
<th class="table-warning" >Food ID</th>
<th class="table-warning" >Price</th>
<th class="table-warning" >Quantity</th>
<th class="table-warning" >Total</th>
<th class="table-warning" >Customer Name</th>
<th class="table-warning" >Customer Email</th>
<th class="table-warning" >Customer Mobile</th>

<style>
body
{
  font-family: 'Orelega One', cursive;
  background-color: white;
  color: #191a19;
  text-align: center;
  border: 40px solid #FF9F1C;
  border-top: 0px;
  margin: 0px;
}
#delbtn
{
	background-color: red;
	color: white;
	font-size: 18px;
	width:100px;
	height:35px;
}

</style>

<?php
          
           $sql="SELECT food,food_id,price,quantity,total,customer,cus_email,cus_mobile FROM `order` WHERE customer_id=$customer_id";
            $result=mysqli_query($conn,$sql);
			$total=mysqli_num_rows($result);
			if($total!=0)
			{
				//echo"total has records";
				//fetch=mysqli_fetch_assoc($result);
				while(($fetch=mysqli_fetch_assoc($result)))
				{
					echo "
					<tr>
					<td>".$fetch['food']."</td>
					<td>".$fetch['food_id']."</td>
					<td>".$fetch['price']."</td>
					<td>".$fetch['quantity']."</td>
					<td>".$fetch['total']."</td>
					<td>".$fetch['customer']."</td>
					<td>".$fetch['cus_email']."</td>
					<td>".$fetch['cus_mobile']."</td>
					
					";
				}
		    }
		    else
			{ 
			  //  echo"total has  no records";
			}
?>

</tr>
</table>


</body>
</html>
	
</html>
<?php require 'head&foot/footer.php'; ?>