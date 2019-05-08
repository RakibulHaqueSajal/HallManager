<?php
    include 'db.php';
     
    session_start();

    if(isset($_POST['submit1']))
    {
        $auser="sajal";
        $apass="1234";
        $suser= mysqli_real_escape_string($connection,$_POST['user']);
        $pass= mysqli_real_escape_string($connection,$_POST['pass']);
       
        if(strcmp($auser, $suser)==0 &&strcmp($apass, $pass)==0 )
        { 
            $_SESSION["username"]=$suser;
            header("Location:Dashboard.php");
        }
        else
        {
        
         echo '<div class="alert alert-warning" class="pulse" style="margin-top:40px;">
                  <strong>Warning!</strong>Username or Password is Wrong.
                </div>';
        }
        
    }
    
     

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo.png">

    <title>LOGIN |RUET HALL MANAGER </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin animated bounceIn" method="post">
        <h2 class="form-signin-heading">Login |Ruet Hall Manager</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="user" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit1">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
