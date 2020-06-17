<?php 


// && isset($_POST['restaurantname']) && isset($_POST['restaurantaddress'])
    include("../functions.php");

        //checking username and password input
        if ( !empty($_POST['username'])  && !empty($_POST['password'])  && !empty($_POST['restaurantname'])  && !empty($_POST['restaurantaddress'])        ) {

            //prevent sql injection by escaping special characters
            $username = $sqlconnection->real_escape_string($_POST['username']);
            $password = $sqlconnection->real_escape_string($_POST['password']);
            $restaurantname=$sqlconnection->real_escape_string($_POST['restaurantname']);
            $restaurantaddress=$sqlconnection->real_escape_string($_POST['restaurantaddress']);


            //sql statement
            
            $sql = "INSERT INTO restaurants (username, restaurant_name, restaurant_address, restaurant_password) VALUES ('{$username}', '{$restaurantname}','{$restaurantaddress}','{$password}')";

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


