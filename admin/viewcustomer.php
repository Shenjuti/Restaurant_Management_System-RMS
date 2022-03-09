<?php require 'adhead.php'; ?>
<html>


<body>

<table class="table table-bordered" class="table-warning" >
<tr class="table-warning">
<th class="table-warning" >Customer ID</th>
<th class="table-warning" >Username</th>
<th class="table-warning" >Email</th>
<th class="table-warning" >Mobile</th>
<th class="table-warning" >Password</th>
<th colspan="2" align="center"class="table-warning"  >Opreation</th>
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
	width:130px;
	height:35px;
}

</style>

<?php
           require 'addb.php';
            $sql="SELECT * FROM customer";
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
					<td >".$fetch['customer_id']."</td>
					<td>".$fetch['username']."</td>
					<td>".$fetch['email']."</td>
					<td>".$fetch['mobile']."</td>
					<td>".$fetch['password']."</td>
					<td><a href = 'deleteuser.php?id=$fetch[customer_id]'><input type='submit' value='Delete' id='delbtn'></a></td>
					
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
<?php require 'adfoot.php'; ?>
			