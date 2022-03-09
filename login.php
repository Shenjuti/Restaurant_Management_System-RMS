<?php require 'head&foot/header.php'; 


   include("db.php");
   

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);
	  $password= sha1($password);

      $sql = "SELECT * FROM customer WHERE username='$username'
and password='$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['login_user'] = $username;
		 echo "<script>
					alert('login successful!');window.location.href='welcome.php'</script>";
         //header("Location:welcome.php");
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
			<link rel="stylesheet" href="reg&log.css">
				<link rel="preconnect" href="https://fonts.gstatic.com">
					<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
   
   </head>
	 
   <body>
		   

			  <div class="container">
				<div class="jumbotron">
				  <h1>Log In!</h1>
				  <p>Enter Your Full Name and Password!</p>
				</div>
			  </div><br>
      

               <form action = "" method = "post">
                  <label>User Name  : </label><input type = "text" name = "username" class = "box" placeholder="name"/><br /><br />
                  <label>Password  : </label><input type = "password" name = "password" class = "box" placeholder="password" /><br/><br />

                 <input type = "submit" value = " Submit " class="btn btn-warning" /><br />
				 
				 <h5 class="text" >Not registered yet? <a href='regstyle.php'>Register Here</a></h5>
               </form>

              

            </div>

         </div>

      </div>

   </body>
</html>
