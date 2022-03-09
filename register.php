 <?php
       include_once 'db.php';
       if (isset($_POST['submit'])) {
           $username = $_POST['username'];
           $email = $_POST['email'];
           $mobile = $_POST['mobile'];
           $password = $_POST['password'];
		   $password= sha1($password);
                $sql = "INSERT INTO customer(username, email, mobile, password ) VALUES ('$username','$email','$mobile','$password')";

                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully !";
					header("location:login.php");
                    } 
                else {
                     echo "Error: " . $sql . "
                        " . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>