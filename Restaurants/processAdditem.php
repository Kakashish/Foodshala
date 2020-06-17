<?php
include("../functions.php");

	//Add new menu item
	

		if (!empty($_POST['menuname']) && !empty($_POST['price']) && !empty($_SESSION['restaurant_name']) && !empty($_POST['category'])) {
            $menuname = $sqlconnection->real_escape_string($_POST['menuname']);
            $restname = $_SESSION['restaurant_name'];
			$category = $sqlconnection->real_escape_string($_POST['category']);
			$price = $sqlconnection->real_escape_string($_POST['price']);

			$addItemQuery = "INSERT INTO menu (menu_name ,restaurant_name,category ,price) VALUES ('{$menuname}' ,'{$restname}' ,'{$category}','{$price}')";

			if ($sqlconnection->query($addItemQuery) === TRUE) {
				echo "correct"; 
				exit();

			} 

			else {
				//handle
				echo "something wrong";
				echo $sqlconnection->error;
				exit();
			}
		}

		//No input handle
		else {
            echo "Kuch galat ho raha hai";
		}

	

	
?>