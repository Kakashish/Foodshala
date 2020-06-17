<?php
	include("../functions.php");

	if(empty($_GET['cmd'])) 
		die();
	


	if($_GET['cmd'] === 'display'){

	
	$displayOrderQuery =  "SELECT menu_name,category,price,restaurant_name,cust_username FROM order_item";

	if ($menuResult = $sqlconnection->query($displayOrderQuery)) {

		
		//if no order
		if ($menuResult->num_rows == 0) {

			echo "<tr><td class='text-center' colspan='7' >No order for now :) </td></tr>";
		}

		else {
			while($menuRow = $menuResult->fetch_array(MYSQLI_ASSOC)) {



                if($_SESSION['restaurant_name']===$menuRow['restaurant_name']){
                    

                        echo "<tr>";
    
                    echo "
                        <td>".$menuRow['menu_name']."</td>
                        <td>".$menuRow['category']."</td>
                        <td>".$menuRow['price']."</td>
                        <td>".$menuRow['cust_username']."</td>
                        

                        
                    ";
    
                    echo "</tr>";
                      

                }

				

				

			}
		}	
	}
    }
    ?>