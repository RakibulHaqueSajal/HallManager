<?php
    include 'db.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>RUET Hall Manager</title>
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
                        <li><a href="Adminlogin.php"><i class="fa fa-lock"></i> Admim</a></li>
               </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bank"></i> Halls<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="Ziahall.php">Shahid President Ziaur Rahman Hall</a></li>
                        <li><a href="hamidhall.php">Shahid Abdul Hamid Hall </a></li>
                        <li><a href="tinshed.php">Tinshed Hall</a></li>
                        <li><a href="shahidul.php">Shahid Shahidul Islam Hall</a></li>
                        <li><a href="bangabandhu.php">Bangabondhu Sheikh Mujibur Rahman Hall</a></li>
                        <li><a href="selim.php">Shahid Lieutenant Salim hall</a></li>
                        <li><a href="hasina.php">Deshratna Sheikh Hasina Hall</a></li>
                      </ul>
                    </li>
            <li><a href="contact.php"><i class="fa fa-phone"></i> Contact Us</a></li>
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
                        <center><h1 style="color: chocolate; font-family: cursive;">About RUET</h1></center>
                        <br>
                        <p style="text-align: justify;">Rajshahi University of Engineering &amp; Technology, commonly known as RUET (রুয়েট) , is one of the seventeen PhD granting public research universities in Bangladesh. It is one of the five prestigious public universities in the country that specializes in the field of engineering. <br><br>RUET was founded in 1964 as Rajshahi Engineering College with a limited number of students. It was then changed to Bangladesh Institute of Technology (BIT) in 1986 and was finally renamed Rajshahi University of Engineering &amp; Technology (RUET) in 2003. <br><br>Goal of this site is to maintain the halls of RUET with the help of a website.</p>
                    </div>
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