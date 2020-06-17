<?php
	include("../functions.php");

	if(empty($_GET['cmd'])) 
		die();
	


	if($_GET['cmd'] === 'display'){

	
	$displayMenuQuery =  "SELECT menu_name,category,price,restaurant_name FROM menu";

	if ($menuResult = $sqlconnection->query($displayMenuQuery)) {

		
		//if no order
		if ($menuResult->num_rows == 0) {

			echo "<tr><td class='text-center' colspan='7' >No Menu available :) </td></tr>";
		}

		else {
			while($menuRow = $menuResult->fetch_array(MYSQLI_ASSOC)) {



                if(1){
                    

                        echo "<tr>";
    
                    echo "
                        <td>".$menuRow['menu_name']."</td>
                        <td>".$menuRow['category']."</td>
                        <td>".$menuRow['restaurant_name']."</td>
						<td>".$menuRow['price']."</td>";
						?>


						<?php if (isset($_SESSION['uid'])) :  ?>
						<td><button class='btn btn-dark btn-sm' onclick="addOrder('<?= $menuRow['menu_name'] ?>', '<?= $menuRow['category'] ?>', '<?= $menuRow['restaurant_name'] ?>', '<?= $menuRow['price'] ?>')" >Order </button></td>
						<?php endif ?>
						<?php
						echo "    
                    ";
    
                    echo "</tr>";
                     

                }

				

				

			}
		}	
	}
	}


	?>
	<script>
		function addOrder(menuname, category, restname, price){
			console.log(menuname+" "+category+" "+restname+" "+price);

			$.ajax({
                type: "POST",
                url: 'processAddOrder.php',
                data: {
                    menu_name: menuname,
                    category: category,
					restaurant_name: restname,
					price: price
                    
                },
                success: function(data)
                {
                    if (data === 'correct') {
						alert("Ordered");
                        window.location.replace('index.php');
                    }
                    else {
                        $("#warningbox").html("<div class='alert alert-danger' role='alert'>"+data+"!</div>");
                    }
                }
            });
            return false;
		}
	</script>