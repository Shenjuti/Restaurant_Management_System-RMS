<?php session_start(); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	
<nav class="navbar navbar-light" style="background-color: #eb6b38;">
 <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Dashboard of East West Restaurant</a>
	   
    </div>
  </div>
</nav>
  <?php include("addb.php");
   

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);
	  
      $sql = "SELECT * FROM admintable WHERE username='$username'
and password='$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['login_user'] = $username;
         header("Location:dash.php");
         exit;
         
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>

   <head>
      <title>Login Page</title>

     
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="adstyle.css">
				<link rel="preconnect" href="https://fonts.gstatic.com">
					<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
   
   </head>
	 
   <body>
		   

			  <div class="container">
				<div class="jumbotron">
				  <h1>Log In!</h1>
				  <p>Admin Panel Login</p>
				</div>
			  </div><br>
      

               <form action = "" method = "post">
                  <label>User Name  : </label><input type = "text" name = "username" class = "box" placeholder="name"/><br /><br />
                  <label>Password  : </label><input type = "password" name = "password" class = "box" placeholder="password" /><br/><br />

                 <input type = "submit" value = " Submit " class="btn btn-warning" /><br />
				 
				 
               </form>

              

            </div>

         </div>

      </div>

   </body>
</html>
