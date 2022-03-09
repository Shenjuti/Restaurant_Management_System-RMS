<?php require 'adhead.php'; ?>
<html>


<body>

<table class="table table-bordered" class="table-warning" >
<tr class="table-warning">
<th class="table-warning"> Reservation ID</th>
<th class="table-warning" >Customer ID</th>
<th class="table-warning" >Customer Name</th>
<th class="table-warning" >Timeslot</th>
<th class="table-warning" >Customer Email</th>
<th class="table-warning" >Customer Mobile</th>
<th class="table-warning" >Total Guests</th>
<th class="table-warning" >Reservation Date</th>


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
           $sql="SELECT * FROM `reservation` ";
            $result=mysqli_query($conn,$sql);
			$total=mysqli_num_rows($result);
			if($total!=0)
			{
				
				while(($fetch=mysqli_fetch_assoc($result)))
				{
					echo "
					<tr>
					<td >".$fetch['r_id']."</td>
					<td>".$fetch['customer_id']."</td>
					<td>".$fetch['username']."</td>
					<td>".$fetch['timeslot']."</td>
					<td>".$fetch['cus_email']."</td>
					<td>".$fetch['cus_mobile']."</td>
					<td>".$fetch['guest_no']."</td>
					<td>".$fetch['date']."</td>
					
					
					
					";
				}
		    }
		    else
			{ 
			  
			}
?>

</tr>
</table>


</body>
</html>
<?php require 'adfoot.php'; ?>
			