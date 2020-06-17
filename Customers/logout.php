<?php 
	include("../functions.php");

    if((isset($_SESSION['uid']) && isset($_SESSION['customerUsername'])) )  {
        
        session_destroy();
        header("Location: index.php");
     }
     else{
       	header("Location: index.php");
   }

?>