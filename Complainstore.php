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
        <h2 style="color:white;">ComplainBox</h2>
        <!--dropdown menu-->
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Sort According To
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="Complainstore.php?sort=date">Date</a></li>
                <li><a href="Complainstore.php?sort=hall">Hall</a></li>
            </ul>
        </div>
        <br><br>
        <!--table-->
       <table class="table table-striped"  style="background-color:white";>
       <thead>
            <tr class="info">
                <th>id</th>
                <th>Date</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Hall</th>
                <th>Details</th>
            
            </tr>
        </thead>
        <tbody>
            <?php
                  $sort_by = 'none';
                  if(isset($_GET['sort'])){
                      $sort_by = $_GET['sort'];
                  }
                  if($sort_by == 'hall'){
                      $complain_query = "SELECT complainbox.cid, complainbox.cdate, complainbox.cname, student.roll, complainbox.chall, complainbox.cabout, complainbox.cdescription FROM complainbox, student WHERE student.user=complainbox.user ORDER BY complainbox.chall";
                  }
                  else if($sort_by == 'date'){
                      $complain_query = "SELECT complainbox.cid, complainbox.cdate, complainbox.cname, student.roll, complainbox.chall, complainbox.cabout, complainbox.cdescription FROM complainbox, student WHERE student.user=complainbox.user ORDER BY complainbox.cdate";
                  }
                  else{
                      $complain_query = "SELECT complainbox.cid, complainbox.cdate, complainbox.cname, student.roll, complainbox.chall, complainbox.cabout, complainbox.cdescription FROM complainbox, student WHERE student.user=complainbox.user";
                  }
                  
                  $run = mysqli_query($connection,$complain_query);
                  if(mysqli_num_rows($run) > 0){
                      while($row = mysqli_fetch_array($run)){
                          $complain_cid = $row['cid'];
                          $complain_cname = $row['cname'];
                          $complain_roll = $row['roll'];
                          $complain_chall = $row['chall'];
                          $complain_cdate = $row['cdate'];
                          $complain_cabout = $row['cabout'];
                          $complain_cdescription = ($row['cdescription']);
            ?>
            <tr>
        <!--first example-->
            <td><?php echo $complain_cid; ?></td>
            <td><?php echo $complain_cdate; ?></td>
            <td><?php echo $complain_cname; ?></td>
            <td><?php echo $complain_roll; ?></td>
            <td><?php echo $complain_chall; ?></td>
            <td><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal<?php echo $complain_cid; ?>">View</button>

                <!-- Modal -->
                <div id="myModal<?php echo $complain_cid; ?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo $complain_cabout; ?></h4>
                      </div>
                      <div class="modal-body">
                        <p><?php echo $complain_cdescription; ?></p>
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
