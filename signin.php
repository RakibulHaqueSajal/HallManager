
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>RUET Hall Manager</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.common.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signin.css">
     <script src="sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sweetalert2/sweetalert2.css">
  </head>
  
  
  <body style="font-family: cursive; background: lightgray;">
  <?php
    include 'db.php';
     
    session_start();

    if(isset($_POST['submit1']))
    {
        $suser= mysqli_real_escape_string($connection,$_POST['user']);
        $pass= mysqli_real_escape_string($connection,$_POST['pass']);
        $query1="SELECT * FROM `student` WHERE student.user='".$suser."' AND pass='".md5($pass)."';";
        $result=mysqli_query($connection,$query1);
        if(mysqli_num_rows($result)==1)
        { 
            $_SESSION["username"]=$suser;
            header("Location:profile.php");
        }
        else
        {
        
           echo "<script language='javascript'>
                                       swal(
                                            'Error!',
                                            'Wrong Username or password!',
                                            'error'
                                            );
				          </script>";
        }
        
    }
    
     

?>
    <!-- 01. Navbar -->
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.html">
              <div class="row">
                  <div class="col-xs-3"><img src="img/logo.png" alt="top image" style="height: 30px; width: 30px; margin-top: 10px;"></div>
                  <div class="col-xs-9"><a class="navbar-brand" href="index.html">RUET</a></div>
              </div>
          </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bank"></i> Halls<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="Ziahall.html">Shahid President Ziaur Rahman Hall</a></li>
                        <li><a href="hamidhall.html">Shahid Abdul Hamid Hall </a></li>
                        <li><a href="tinshed.html">Tinshed Hall</a></li>
                        <li><a href="shahidul.html">Shahid Shahidul Islam Hall</a></li>
                        <li><a href="bangabandhu.html">Bangabondhu Sheikh Mujibur Rahman Hall</a></li>
                        <li><a href="selim.html">Shahid Lieutenant Salim hall</a></li>
                        <li><a href="hasina.html">Deshratna Sheikh Hasina Hall</a></li>
                      </ul>
                    </li>
            <li><a href="contact.html"><i class="fa fa-phone"></i> Contact Us</a></li>
              <li><a href="signin.php"><i class="fa fa-sign-in"></i>Sign in</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-paw"></i> Sign Up<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="student.php">Student</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="provost.php">Provost</a></li>
                <li><a href="provost.html">Assistant Provost</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav> <!-- Navbar Finished -->
    
    <!-- 02. Jumbotron from Bootstrap.com -->
    <div class="jumbotron">
        <div class="container">
            <div id="details" class="animated fadeInLeft">
                <h1 style="font-family: cursive;">RUET <span style="font-family: cursive;">Hall Manager</span></h1>
                <p>A System Design To Run Hall In An Efficient Way</p>
            </div>
        </div>
        <img src="img/top-image.jpg" alt="Top Image">
    </div> <!-- End of Jumbotron -->
    
    <div class="container">
    <div class="row" style="background-image: url(img/signinbackgorund.jpg);opacity: 20%;">
     <div class="col-md-3"></div>
        <div class="col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Username</label>
                        <div class="col-sm-9">
                            <input type="text" name="user" class="form-control" id="inputEmail3" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="submit1" class="btn btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                    Not Registred? <a href="student.php">Register here</a></div>
            </div>
        </div>
    </div>
</div>

    
    <footer>
        <div class="container">
            <center>Copyright &copy; by <a href="http://www.facebook.com/">Rakibul Haque Sajal</a>. All Right Reserved from 2017 - 2020.</center>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>