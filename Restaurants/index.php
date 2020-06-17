



<?php 
  include("../functions.php");

  if(   (!isset($_SESSION['uid']) && !isset($_SESSION['username']) ) ) 
    header("Location: login.php");






?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Dashboard Foodshala Admin</title>

<!-- Bootstrap core CSS-->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<style>
#tblCurrentOrder th{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:black;
  color: white;
}
#tblCurrentOrder1 th{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:black;
  color: white;
}
body{
  background-color:#D8CBC8;
}



</style>

</head>
<body>

<div class="card-body">
                  <table id="tblCurrentOrder" table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                    <thead>
                      <th>Menu</th>
                      <th>Category Veg</th>
                      <th>Cost</th>
                    </thead>
                    
                    <tbody id="tblBodyCurrentOrder">
                      
                    </tbody>
                  </table>
                </div>



                <div class="card-body">
                  <table id="tblCurrentOrder1" table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                    <thead>
                      <th>Menu</th>
                      <th>Category Non-Veg</th>
                      <th>Cost</th>
                    </thead>
                    
                    <tbody id="tblBodyCurrentOrder1">
                      
                    </tbody>
                  </table>
                </div>

                <button class="btn btn-dark btn-sm" onclick="window.location.replace('additem.php');">Add Item</button>
                <button class="btn btn-dark btn-sm" onclick="window.location.replace('logout.php');">Logout</button>
                <button class="btn btn-dark btn-sm" onclick="window.location.replace('viewOrders.php');">View Order</button>




<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <script type="text/javascript">

    $( document ).ready(function() {
        refreshTableOrder();
        refreshTableOrder1();
        
    });

    function refreshTableOrder() {
      $( "#tblBodyCurrentOrder" ).load( "displaymenu.php?cmd=display" );
      
    }
    function refreshTableOrder1() {
      $( "#tblBodyCurrentOrder1" ).load( "displaymenu.php?cmd=display1" );
      
    }

    //refresh order current list every 3 secs
    setInterval(function(){ refreshTableOrder(); }, 3000);
    setInterval(function(){ refreshTableOrder1(); }, 3000);

  </script>

</body>

</html>



