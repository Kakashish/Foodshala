<?php 

?>

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

    <style>
    body{
  background-color:#D8CBC8;
}
    </style>

  </head>

  <body>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header bg-dark text-white">Restaurant Login</div>
        <div class="card-body">
          <form id="loginform">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputRestaurantUsername" name="restaurantusername" class="form-control" placeholder="Username" required="required" autofocus="autofocus" >
                <label for="inputRestaurantname">Restaurant Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required" >
                    <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
                <div id="warningbox">
                </div>
            <input type="submit" class="btn btn-dark btn-sm" form="loginform" name="btnlogin" value="Login" />
            <button class="btn btn-dark btn-sm" onclick="window.location.replace('register.php');">Register</button>
            

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
        $('#loginform').submit(function() {
            $.ajax({
                type: "POST",
                url: 'processLog.php',
                data: {
                    username: $("#inputRestaurantUsername").val(),
                    password: $("#inputPassword").val(),
                    
                },
                success: function(data)
                {
                    if (data === 'correct') {
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