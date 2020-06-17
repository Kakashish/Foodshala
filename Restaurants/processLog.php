<?php 
    include("../functions.php");

        //checking username and password input
        if (isset($_POST['username']) && isset($_POST['password'])) {

            //prevent sql injection by escaping special characters
            $username = $sqlconnection->real_escape_string($_POST['username']);
            $password = $sqlconnection->real_escape_string($_POST['password']);

            //sql statement
            $sql = "SELECT * FROM restaurants WHERE username ='$username' AND restaurant_password = '$password'";

            if ($result = $sqlconnection->query($sql)) {

                if ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    
                    $uid = $row['id'];
                    $username = $row['username'];
                    $restaurant = $row['restaurant_name'];

                    $_SESSION['uid'] = $uid;
                    $_SESSION['username'] = $username;
                    $_SESSION['restaurant_name']=$restaurant;

                    echo "correct";
                }

                else {
                    echo "Wrong username or password.";
                }

            }

        }
      
?>