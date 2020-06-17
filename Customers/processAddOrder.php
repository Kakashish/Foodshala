<?php 
    include("../functions.php");

        //checking username and password input
        if (isset($_POST['menu_name']) && isset($_POST['category']) && isset($_POST['restaurant_name']) && isset($_POST['price'])    ) {

            //prevent sql injection by escaping special characters
            $username = $_SESSION['customerUsername'];
            $menu_name = $sqlconnection->real_escape_string($_POST['menu_name']);
            $category = $sqlconnection->real_escape_string($_POST['category']);
            $restaurant_name = $sqlconnection->real_escape_string($_POST['restaurant_name']);
            $price = $sqlconnection->real_escape_string($_POST['price']);

            //sql statement
            $sql = "INSERT INTO order_item (menu_name, restaurant_name, cust_username, price, category) VALUES ('{$menu_name}', '{$restaurant_name}','{$username}','{$price}','{$category}')";

            if ($sqlconnection->query($sql) === TRUE) {
                echo "correct";
                exit();
            } 
            else {
                //handle
                echo "someting wrong";
                echo $sqlconnection->error;
                exit();
            }

        }
      
?>