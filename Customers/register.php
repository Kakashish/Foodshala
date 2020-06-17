<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Customer Login</title>

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
        <div class="card-header bg-dark text-white">Customer Register</div>
        <div class="card-body">
          <form id="registerform">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="customerUsername" name="customerUsername" class="form-control" placeholder="Customer Username" required="required" autofocus="autofocus" >
                <label for="customerUsername">Username</label>
              </div>
            </div>



            <div class="form-group">
              <div class="form-label-group">
                    <input type="text" id="customerName" name="customerName" class="form-control" placeholder="Customer Name" required="required" >
                    <label for="customerName">Customer Name</label>
              </div>
            </div>


            <div class="form-group">
              <div class="form-label-group">
                    <input type="password" id="customerPassword" name="customerPassword" class="form-control" placeholder="Password" required="required" >
                    <label for="reginputPassword">Password</label>
              </div>
            </div>

           





            <div class="form-group">
                <div id="warningbox">
                </div>
            <input type="submit" class="btn btn-dark btn-sm" form="registerform" name="btnRegister" value="Register" />
           
            

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
        $('#registerform').submit(function() {
            $.ajax({
                type: "POST",
                url: 'processReg.php',
                data: {
                    username: $("#customerUsername").val(),
                    password: $("#customerPassword").val(),
                    customername:$("#customerName").val()
                    
                },
                success: function(data)
                {
                    if (data === "correct") {
                        window.location.replace('login.php');
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