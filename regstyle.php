<?php require 'head&foot/header.php'; ?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="reg&log.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
</head>
  <body>
    <form method="post" action="register.php">

 


         <div class="container">
				<div class="jumbotron">
				  <h1>Register!</h1>
				</div>
			  </div><br>
        <div class="mb-3">
          <label for="un"> Full Name:</label>
          <input id="un" type="text" name="username" placeholder="full name" required><br>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1">Email address:</label>
          <input id="exampleInputEmail1" type="email" name="email" placeholder="@gmail.com" required><br>
        </div>

        <div class="mb-3">
          <label for="mb">Mobile:</label>
          <input id="mb" type="text" name="mobile" placeholder="mobile number" required><br>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1">Password:</label>
          <input id="exampleInputPassword1" type="password" name="password" placeholder="password" required><br>
        </div>


        <button type="submit" name="submit" class="btn btn-warning">Submit</button>


    </form>
  </body>
</html>