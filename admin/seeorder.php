<?php require 'adhead.php'; ?>
<html>


<body>

<table class="table table-bordered" class="table-warning" >
<tr class="table-warning">
<th class="table-warning"> Order ID</th>
<th class="table-warning" >Food</th>
<th class="table-warning" >Food ID</th>
<th class="table-warning" >Price</th>
<th class="table-warning" >Quantity</th>
<th class="table-warning" >Total</th>
<th class="table-warning" >Customer Name</th>
<th class="table-warning" >Customer ID</th>
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
           require 'addb.php';
           $sql="SELECT * FROM `order` ORDER BY order_id DESC";//show latest order at top
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
					<td >".$fetch['order_id']."</td>
					<td>".$fetch['food']."</td>
					<td>".$fetch['food_id']."</td>
					<td>".$fetch['price']."</td>
					<td>".$fetch['quantity']."</td>
					<td>".$fetch['total']."</td>
					<td>".$fetch['customer']."</td>
					<td>".$fetch['customer_id']."</td>
					<td>".$fetch['cus_email']."</td>
					<td>".$fetch['cus_mobile']."</td>
					
					
					";
				}
		    }
		    else
			{ 
			  //  echo"total has  no records";
			}//<td><a href = 'deleteorder.php?id=$fetch[order_id]'><input type='submit' value='Delete' id='delbtn'></a></td>
?>

</tr>
</table>


</body>
</html>
<?php require 'adfoot.php'; ?>
			