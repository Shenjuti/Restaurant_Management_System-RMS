<?php require 'adhead.php'; ?>
<html>


<body>

<table class="table table-bordered" class="table-warning" >
<tr class="table-warning">
<th class="table-warning" >Food ID</th>
<th class="table-warning" >Foodname</th>
<th class="table-warning" >Foodtype</th>
<th class="table-warning" >Description</th>
<th class="table-warning" >price</th>
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
#upbtn
{
	background-color: green;
	color: white;
	font-size: 18px;
	width:130px;
	height:35px;
}
</style>

<?php
           require 'addb.php';
            $sql="SELECT * FROM food";
            $result=mysqli_query($conn,$sql);
			$total=mysqli_num_rows($result);
			//echo $fetch['foodname']." ".$fetch['foodtype']." ".$fetch['description']." ".$fetch['price'];
			//total no of rows
			//echo $total
			if($total!=0)
			{
				//echo"total has records";
				//fetch=mysqli_fetch_assoc($result);
				while(($fetch=mysqli_fetch_assoc($result)))
				{
					echo "
					<tr>
					<td >".$fetch['food_id']."</td>
					<td>".$fetch['foodname']."</td>
					<td>".$fetch['foodtype']."</td>
					<td>".$fetch['description']."</td>
					<td>".$fetch['price']."</td>
					<td><a href = 'updatefood.php?id=$fetch[food_id]&na=$fetch[foodname]&ty=$fetch[foodtype]&des=$fetch[description]&pr=$fetch[price] '><input type='submit' value='Update' id='upbtn'></a></td>
					<td><a href = 'deletefood.php?id=$fetch[food_id]'><input type='submit' value='Delete' id='delbtn'></a></td>
					
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
			