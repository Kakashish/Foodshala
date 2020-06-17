<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restaurant Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Add item</div>
        <div class="card-body">
          <form id="additemform">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="menuName" name="menuName" class="form-control" placeholder="Menu Name" required="required" autofocus="autofocus" >
                <label for="menuname">Menu name</label>
              </div>
            </div>


            <div class="form-group">
              <div class="form-label-group">
              <select id="category" name="category" class="form-control" required="required"l>
              <label for="category">Category</label>
  <option value="veg">Veg</option>
  <option value="non-veg">Non-Veg</option>
  
</select>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                    <input type="text" id="price" name="price" class="form-control" placeholder="Price" required="required" >
                    <label for="price">Price</label>
              </div>
            </div>



            




            <div class="form-group">
                <div id="warningbox">
                </div>
            <input type="submit" class="btn btn-dark btn-sm" form="additemform" name="btnadditem" value="Add Item" />
           
            

          </form>
       <a href="../index.php" class="btn btn-dark btn-sm">Back</a>
       
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript">
        $('#additemform').submit(function() {
            $.ajax({
                type: "POST",
                url: 'processAdditem.php',
                data: {
                    menuname: $("#menuName").val(),
                    category: $("#category").val(),
                    price: $("#price").val()
                    
                },
                success: function(data)
                {
                    if (data === "correct") {
                        window.location.replace('index.php');
                    }
                    else {
                        $("#warningbox").html("<div class='alert alert-danger' role='alert'>"+data+"!</div>");
                    }
                }
            });
            return false;
        });
    </script>

    

  </body>

</html>