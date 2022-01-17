<?php 
// After User Click On Logout page.
require('functions.php'); // Connection
 session_start();    // Session start
?>


 <?php
     unset($_SESSION["customerID"]);
     session_destroy();
     session_unset();    
     header('Location: index.php');

 ?>