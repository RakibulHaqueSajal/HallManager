<?php 
ob_start();
require_once('db.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ruet Hall Manager</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <script>
         $(function(){
                $('.panel').hover(function(){
                        $(this).find('.panel-footer').slideDown(250);
                    },function(){
                        $(this).find('.panel-footer').slideUp(250); //.fadeOut(205)
                    });
                })

    </script>
  </head>
  <body>
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
                        <li><a href="Adminlogin.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
               </ul>
          <ul class="nav navbar-nav navbar-left">
            <li><a href="Dashboard.php"><i class="fa fa-home"></i> Home</a></li>
     
          </ul>
        </div>
      </div>
    </nav> <!-- Navbar Finished -->

    
     <div class="container-fluid" style="margin-top:30px;">
         <div class="row">
                 <div class="col-md-4"></div>
                 <div class="col-md-4"><h1>ADMIN DASHBOARD</h1></div>
                 <div class="col-md-4"></div>
         </div>
         
         
         <form action="stud_details.php" style="width: 100%;">
             <input type="text" class="form-control" id="inputSuccess5" name="search" placeholder="Search For...">
         </form>
         
         <div class="row">
              <div class="col-md-12">
                  <br>
                  <br>
              </div>
         </div>
          <div class="row">
                 <div class="col-md-4">
                      <div class="panel panel-default">
                             <div class="panel-body">                    
                               <a href="complainstore.php"><h2>COMPLAIN BOX</h2></a>
                             
                      </div>
                 </div>
              </div>
               <div class="col-md-4"></div>
                 
                 <div class="col-md-4">
                      <div class="panel panel-default">
                             <div class="panel-body">                    
                               <a href="foodcupon.php"><h2>Food Cupon</h2></a>
                             
                     </div>
                 </div>
         </div>
       </div>
          <div class="row">
                 <div class="col-md-4"></div>
                 <div class="col-md-4"> 
                            
                    <div class="panel panel-default">
                             <div class="panel-body">                    
                               <a href="halls.php"><h1 > HALLS</h1></a>
                             </div>
                 </div>
                 
                 </div>
                 <div class="col-md-4"></div>
         </div>
           
          <div class="row">
                 <div class="col-md-4">
                      <div class="panel panel-default">
                             <div class="panel-body">                    
                               <a href="notice.php"><h2>NOTICE</h2></a>
                             
                      </div>
                 </div>
              </div>
               <div class="col-md-4"></div>
                 
                 <div class="col-md-4">
                      <div class="panel panel-default">
                             <div class="panel-body">                    
                               <a href="feedback.php"><h2>FEEDBACK</h2></a>
                             
                     </div>
                 </div>
         </div>
       </div>
                 
      </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
  </body>
</html>
