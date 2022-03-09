
<?php require 'db.php';
global $bookings; 
global $customer_id ; 
$bookings=array();
 
session_start();
           
		   $user_check = $_SESSION['login_user'];
			   
			   $ses_sql = mysqli_query($conn,"SELECT customer_id FROM customer WHERE username = '$user_check' ");
			   
			   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
			   
			   $customer_id = $row['customer_id'];

if(isset($_GET['date'])){
	$date = isset($_GET['date']) ? $_GET['date'] : '';
	if($sql=$conn->prepare("SELECT * FROM reservation where date=?")){
$sql->bind_param ('s',$date);
//$book=' ';
//$bookings=array();
if($sql->execute()){
	$result=$sql->get_result();
	if($result->num_rows > 0){
	while($fetch=$result->fetch_assoc()){
		$bookings[]=$fetch['timeslot'];
	                                  }
									  
	$sql->close();
	
	                        }
	
}}}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
	$customer_id=$_POST['customer_id'];
    $cus_email = $_POST['cus_email'];
    $timeslot = $_POST['timeslot'];
	$cus_mobile = $_POST['cus_mobile'];
	$guest_no= $_POST['guest_no'];
	//$date= $_POST['date'];
			
        
$sql = $conn->prepare("select * from reservation where timeslot=?  AND date = ?");
    $sql->bind_param('ss', $timeslot, $date);
    if($sql->execute()){
        $result = $sql->get_result();
        if($result->num_rows>0){
			 
		$msg = "<div class='alert alert-danger'>Already Booked</div>";
            
        }else{
           $sql1="INSERT INTO `reservation`(`customer_id`,`username`,`timeslot`,`cus_email`,`cus_mobile`,`guest_no`, `date`) VALUES ('$customer_id','$username','$timeslot','$cus_email','$cus_mobile','$guest_no','$date')";
	
				if (mysqli_query($conn, $sql1)) 
					{
                  
					
					 $msg="<div class='alert alert-success'>Booking Successfull</div>";
					echo $msg;
					$bookings[]=$timeslot;
                    } 
				else            {
                     echo "Error: " . $sql1 . "
                        " . mysqli_error($conn);
                    }
		mysqli_close($conn);
        }
    }
		
	

        
    
   
}

$duration=60;
$cleanup=0;
$start="11:00";
$end="22:00";
function timeslots($duration,$cleanup,$start,$end){
	$start= new DateTime($start);
	$end=new DateTime($end);
	$interval=new DateInterval("PT".$duration."M");
	$cleanupInterval=new DateInterval("PT".$cleanup."M");
	$slots= array();
	for($intStart=$start;$intStart<$end;$intStart->add($interval)->add($cleanupInterval)){
		$endPeriod= clone $intStart;
		$endPeriod->add($interval);
		if($endPeriod>$end)
		{break;}
	$slots[]=$intStart->format("H:iA")."-".$endPeriod->format("H:iA");
	}
return $slots;}
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body>
    <div class="container">
        <h1 class="text-center">Book for Date:<?php echo date('m/d/Y', strtotime($date)); ?> </h1><hr>
        <div class="row">
		<div class="col-md-12">
		<?php echo isset($msg)?$msg:"";?>
		</div>
		<?php
		$timeslots=' '; 
		$timeslots=timeslots($duration,$cleanup,$start,$end);
		foreach($timeslots as $ts){
			?>
			<div class="col-md-2">
			<div class="form-group">
			
			<?php 
			
			if(in_array($ts,$bookings)){?>
			<button class="btn btn-danger" ><?php echo $ts; ?></button>
			<?php }else{?>
			<button class="btn btn-success book " data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
			<?php }?>
			</div>
			</div>
			
		<?php }?>
		
		
            
        </div>
    </div>
	
	<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Booking for: <span id="slot"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post">
                               <div class="form-group">
                                    <label for="">Time Slot</label>
                                    <input readonly type="text" class="form-control" id="timeslot" name="timeslot">
                                </div>
								<input type="hidden" name="customer_id" value="<?php echo $customer_id;?>">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input required type="text" class="form-control" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input required type="email" class="form-control" name="cus_email">
                                </div>
								<div class="form-group">
                                    <label for="">Mobile</label>
                                    <input required type="mobile" class="form-control" name="cus_mobile">
                                </div>
								<div class="form-group">
                                    <label for="">Total Guests</label>
                                    <input required type="text" class="form-control" name="guest_no">
                                </div>
								
                                <div class="form-group pull-right">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script>
$(".book").click(function(){
    var timeslot = $(this).attr('data-timeslot');
    $("#slot").html(timeslot);
    $("#timeslot").val(timeslot);
    $("#myModal").modal("show");
});
</script>
 </body>

</html>