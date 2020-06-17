<?php
	include("../functions.php");

	if(empty($_GET['cmd'])) 
		die();
	


	if($_GET['cmd'] === 'display'){

	
	$displayMenuQuery =  "SELECT menu_name,category,price,restaurant_name FROM menu";

	if ($menuResult = $sqlconnection->query($displayMenuQuery)) {

		
		//if no order
		if ($menuResult->num_rows == 0) {

			echo "<tr><td class='text-center' colspan='7' >No order for now :) </td></tr>";
		}

		else {
			while($menuRow = $menuResult->fetch_array(MYSQLI_ASSOC)) {



                if($_SESSION['restaurant_name']===$menuRow['restaurant_name']){
                    if($menuRow['category']==="veg"){

                        echo "<tr>";
    
                    echo "
                        <td>".$menuRow['menu_name']."</td>
                        <td>".$menuRow['category']."</td>
                        <td>".$menuRow['price']."</td>
                        
                    ";
    
                    echo "</tr>";
                    }  

                }

				

				

			}
		}	
	}
	}
	else if($_GET['cmd'] === 'display1'){


		$displayMenuQuery =  "SELECT menu_name,category,price,restaurant_name FROM menu";
	
		if ($menuResult = $sqlconnection->query($displayMenuQuery)) {
	
			
			//if no order
			if ($menuResult->num_rows == 0) {
	
				echo "<tr><td class='text-center' colspan='7' >No order for now :) </td></tr>";
			}
	
			else {
				while($menuRow = $menuResult->fetch_array(MYSQLI_ASSOC)) {

                    if($_SESSION['restaurant_name']===$menuRow['restaurant_name']){
                        if($menuRow['category']==="non-veg"){
	
                            echo "<tr>";
        
                        echo "
                            <td>".$menuRow['menu_name']."</td>
                            <td>".$menuRow['category']."</td>
                            <td>".$menuRow['price']."</td>
                            
                        ";
        
                        echo "</tr>";
                        }

                    }
	
					
	
					
	
				}
			}	
		}
	}
	else {
		die();
	}

?>