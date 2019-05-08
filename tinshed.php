<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>Tinshed Hall</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  
  
  <body style="font-family: cursive; background: lightgray;">

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
            <li><a href="contact-us.html"><i class="fa fa-phone"></i> Contact Us</a></li>
              <li><a href="signin.php"><i class="fa fa-sign-in"></i>Sign in</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-paw"></i> Sign Up<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="student.html">Student</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Provost</a></li>
                <li><a href="#">Assistant Provost</a></li>
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
                <p>Tinshed hall</p>
            </div>
        </div>
        <img src="img/top-image.jpg" alt="Top Image">
    </div> <!-- End of Jumbotron -->
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- 03. Carousel Slide from Bootstrap.com -->
                <div id="carousel-example-generic" class="carousel slide slider-border" data-ride="carousel">
                    <ol class="carousel-indicators"> <!-- Data Slide to others -->
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner lightgray" role="listbox">
                      <!-- Slide: 01 -->
                      <div class="item active">
                        <img src="img/1.jpg" alt="Slider 1">
                        <div class="carousel-caption">
                          <h1 style="color: chocolate; font-family: cursive;">Shaheed Minar</h1>
                        </div>
                      </div>
                      <!-- Slide: 02 -->
                      <div class="item">
                        <img src="img/2.jpg" alt="Slider 2">
                        <div class="carousel-caption">
                          <h1 style="color: chocolate; font-family: cursive;">Water Tank</h1>
                        </div>
                      </div>
                      <!-- Slide: 03 -->
                      <div class="item">
                        <img src="img/3.jpg" alt="Slider 3">
                        <div class="carousel-caption">
                          <h1 style="color: chocolate; font-family: cursive;">Zia Hall</h1>
                        </div>
                      </div>
                    </div>

                    <!-- All Controls related to carousel slide -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <!-- Left Button -->
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <!-- Right Button -->
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div> <!-- End of Carousel Slide -->
            </div>
            <div class="col-md-4 animated fadeInRightBig">
                <div class="row">
                    <div class="col-md-12">
                        <center><h1 style="color: chocolate; font-family: cursive;">About Hall</h1></center>
                        <br>
                        <p style="text-align: justify;">Tinshed hall is an extension of shaheed shahidul islam hall. It is the only hall having tin structure. It has a capacity of having 100-125 students.</p>
                    </div>
                </div>
                <center><h1 style="color: chocolate; font-family: cursive;">Hall Facilities</h1></center>
                <div class="row">
                    <div class="col-md-6">
                        <center>
                            <form action="">
                                <input type="submit" value="Food Coupon" name="submit" class="btn btn-success">
                            </form>
                        </center>
                    </div>
                    <div class="col-md-6">
                        <center>
                            <form action="">
                                <input type="submit" value="Complain Box" name="submit" class="btn btn-primary">
                            </form>
                        </center>
                    </div>
                </div>
                <center><h1 style="color: chocolate; font-family: cursive;">Notice Board</h1></center>
                <marquee behavior="scroll" direction="right" onmouseover="this.stop()" onmouseout="this.start()">
                    <ul> 
                       <li> <span>No Guest Meal Today</span></li>
                       <li> <span>Payment of this month</span></li>
                       <li> <span>Printer available in Room 20</span></li>    
                    </ul>
                </marquee>
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