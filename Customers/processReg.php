<?php 


// && isset($_POST['restaurantname']) && isset($_POST['restaurantaddress'])
    include("../functions.php");

        //checking username and password input
        if ( !empty($_POST['username'])  && !empty($_POST['password'])  && !empty($_POST['customername'])        ) {

            //prevent sql injection by escaping special characters
            $username = $sqlconnection->real_escape_string($_POST['username']);
            $password = $sqlconnection->real_escape_string($_POST['password']);
            $customername = $sqlconnection->real_escape_string($_POST['customername']);
            


            //sql statement
            
            $sql = "INSERT INTO customer (cust_username, cust_password, cust_name) VALUES ('{$username}', '{$password}','{$customername}')";

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