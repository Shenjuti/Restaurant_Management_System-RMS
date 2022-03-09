<?php session_start(); ?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
</style>
<body>
<nav class="navbar navbar-light" style="background-color: #eb6b38;">
 <div class="container-fluid">
 <center>
    <a class="navbar-brand" href="#">Admin Dashboard of East West Restaurant</a></br>
</center>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adlog.php">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="viewcustomer.php">View Customers</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="insertmenu.php"> Add Menu</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menudel.php"> Update/Delete Menu</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="seeorder.php"> View Orders</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adres.php"> View Reservations</a>
        </li>
        <li class="nav-item">
		  <a class="nav-link active" aria-current="page" href = "adout.php">Sign Out</a>
		</li>
          
        
      
    </div>
  </div>
</nav>
</body>
</html>
