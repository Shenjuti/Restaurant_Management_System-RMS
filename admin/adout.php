<?php require 'adhead.php'; 
   session_start();
   
   if(session_destroy()) {
      header("Location: adlog.php");
   }
?>