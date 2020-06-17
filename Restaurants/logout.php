<?php 
	include("../functions.php");

    if((isset($_SESSION['uid']) && isset($_SESSION['username'])) )  {
        
        session_destroy();
        header("Location: login.php");
     }
     else{
       	header("Location: login.php");
   }

?>