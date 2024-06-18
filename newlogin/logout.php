<?php 
include 'connection.php';
session_start(); 
session_unset();
session_destroy(); 
// if (isset($_SESSION['email12'])) {
    
   header('Location: register.php'); 
   
// }
?>