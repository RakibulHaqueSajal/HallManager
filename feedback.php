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
    <link rel="stylesheet" href="css/animate.css">
 
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
    </nav>
         <!-- Navbar Finished -->
         <div class="row" style="margin-top:70px;">
          
              </div>
       
              
         </div>
        <h2 style="color:white;">FEEDBACKS</h2>
     
        <br><br>
        <!--table-->
       <table class="table table-striped"  style="background-color:white";>
       <thead>
            <tr class="info">
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Feedback</th>

            </tr>
        </thead>
        <tbody>
            <?php
                  $feed_query="SELECT feedback.id,feedback.Name,feedback.Mobile,feedback.email,feedback.feedback FROM feedback ORDER BY feedback.id";
                  
                  $run = mysqli_query($connection,$feed_query);
                  if(mysqli_num_rows($run) > 0){
                      while($row = mysqli_fetch_array($run)){
                          
                          $feed_id=$row['id'];
                          $feed_name = $row['Name'];
                          $feed_mobile = $row['Mobile'];
                          $feed_email = $row['email'];
                          $feed_feedback = $row['feedback'];

            ?>
            <tr>
        <!--first example-->
            <td><?php echo $feed_name ; ?></td>
            <td><?php echo $feed_mobile; ?></td>
            <td><?php echo $feed_email ; ?></td>
            
            <td><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal<?php echo $feed_id; ?>">View</button>

                <!-- Modal -->
                <div id="myModal<?php echo $feed_id; ?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Feedback:</h4>
                      </div>
                      <div class="modal-body">
                        <p><?php echo  $feed_feedback ?></p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
             </td>
                
            
        </tr>
        <?php
                }
                  }
        ?>
        </tbody>
    </table>
  

    
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
  </body>
</html>
