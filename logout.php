<?php require 'head&foot/header.php'; 
   session_start();
   
   if(session_destroy()) {
      header("Location: homepage.php");
   }
?>