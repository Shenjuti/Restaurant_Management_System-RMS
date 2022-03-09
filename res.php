<?php require 'userhead.php'; ?>
<?php require 'db.php';
function build_calendar($month,$year){
	 



	$daysofweek=array('Sunday','Monday','Tuesday','Wednesday','Friday','Saturday');
	$firstdayofmonth=mktime(0,0,0,(int)$month,(int)1,(int)$year);//had error mktime expects to be int so soln mktime arguments (int)
    $numberdays= date('t',$firstdayofmonth);
	$datedetails=getdate($firstdayofmonth);
	 $monthname=$datedetails['month'];
	$daysofweek=$datedetails['wday'];
	$dateoftoday=date('Y-m-d');
	$prev_month=date('m',mktime(0,0,0,(int)$month-1,(int)1,(int)$year));
	$prev_year=date('Y',mktime(0,0,0,(int)$month-1,(int)1,(int)$year));
	$next_month=date('m',mktime(0,0,0,(int)$month+1,(int)1,(int)$year));
	$next_year=date('Y',mktime(0,0,0,(int)$month+1,(int)1,(int)$year));
	$calendar='';
	$calendar .= "<center><h2>$monthname $year</h2>"; 
	$calendar .="<a class='btn btn-warning btn-xs' href='?month=".$prev_month."&year=".$prev_year."'>Previous Month</a>";
	$calendar .="<a class='btn btn-warning btn-xs' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a>";
	
	$calendar .="<a class='btn btn-warning btn-xs' href='?month=".$next_month."&year=".$next_year."'>Next Month</a></center>";
	//return $calendar;
	$calendar .= "<table class='table table-bordered'>";
	$calendar .= "<tr>";
	if (is_array($daysofweek) || is_object($daysofweek))//checkingis indeed an array or an object
{
	foreach($daysofweek as $day) { 
$calendar .= "<th class='header'>$day</th>";}}
	$currentDay = 1;
$calendar .= "</tr><tr>";
if($daysofweek > 0) { 
    for($k=0;$k<$daysofweek;$k++){ 
        $calendar .= "<td class='empty'></td>"; 
    } 
}
$month = str_pad($month, 2, "0", STR_PAD_LEFT);
while ($currentDay <= $numberdays) { 
 
    if ($daysofweek== 7) { 
        $daysofweek = 0; 
        $calendar .= "</tr><tr>"; 
    } 
	$currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT); 
	$date = "$year-$month-$currentDayRel"; 
    $dayname = strtolower(date('l', strtotime($date))); 
    $eventNum = 0; 
    $today = $date==date('Y-m-d')? "today" : "";
	if($date<date('Y-m-d')){
		$calendar.="<td ><h4>$currentDayRel</h4><button class='btn btn-danger btn-xs'>N/A</button}></td>";
		}
else{
		$calendar.="<td ><h4>$currentDayRel</h4><a href='bookingg.php?date=".$date."'/ class='btn btn-success btn-xs'>BOOK</button}></td>";
}
		
	$book=' ';
	$date=' ';
    $calendar .="</td>"; 
    $currentDay++; 
    $daysofweek++; 
} 

if ($daysofweek < 7) { 
    $remainingDays = 7 - $daysofweek; 
    for($l=0;$l<$remainingDays;$l++){ 
        $calendar .= "<td class='empty'></td>"; 
    } 
} 

$calendar .= "</tr>"; 
$calendar .= "</table>";
return  $calendar;

	
}?> 
	
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
@media only screen and (max-width: 760px),
(min-device-width: 802px) and (max-device-width: 1020px) {


table, thead, tbody, th, td, tr {
    display: block;

}

.empty {
    display: none;
}


th {
    position: absolute;
    top: -9999px;
    left: -9999px;
}

tr {
    border: 1px solid #ccc;
}

td {
    
    border: none;
    border-bottom: 1px solid #eee;
    position: relative;
    padding-left: 50%;
}



td:nth-of-type(1):before {
    content: "Sunday";
}
td:nth-of-type(2):before {
    content: "Monday";
}
td:nth-of-type(3):before {
    content: "Tuesday";
}
td:nth-of-type(4):before {
    content: "Wednesday";
}
td:nth-of-type(5):before {
    content: "Thursday";
}
td:nth-of-type(6):before {
    content: "Friday";
}
td:nth-of-type(7):before {
    content: "Saturday";
}


}



@media (min-width:641px) {
table {
    table-layout: fixed;
}
td {
    width: 33%;
}
}

.row{
margin-top: 20px;
}

.today{
background:yellow;
}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class"col-md-12">
			<?php
			 $datedetails = getdate();
		if(isset($_GET['month'])&&isset($_GET['year'])){			 
			  $month = $_GET['month']; 
		      $year = $_GET['year']; 
			  }
		else{
			$month=$datedetails['month'];
		    $year =$datedetails['year'];
			}
			  echo build_calendar($month,$year); 
			?>
			</div>
        </div>
    </div>
</body>
</html>	
<?php require 'head&foot/footer.php'; ?>	