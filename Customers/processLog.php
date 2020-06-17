<?php 
    include("../functions.php");

        //checking username and password input
        if (isset($_POST['username']) && isset($_POST['password'])) {

            //prevent sql injection by escaping special characters
            $username = $sqlconnection->real_escape_string($_POST['username']);
            $password = $sqlconnection->real_escape_string($_POST['password']);

            //sql statement
            $sql = "SELECT * FROM customer WHERE cust_username ='$username' AND cust_password = '$password'";

            if ($result = $sqlconnection->query($sql)) {

                if ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    
                    $uid = $row['cust_id'];
                    $username = $row['cust_username'];
                    

                    $_SESSION['uid'] = $uid;
                    $_SESSION['customerUsername'] = $username;
                    

                    echo "correct";
                }

                else {
                    echo "Wrong username or password.";
                }

            }

        }
      
?>