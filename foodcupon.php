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
    <title>Bootstrap 101 Template</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
 
  </head>
  <body>
     <?php
         if(isset($_GET['fid'])){
             $fid = $_GET['fid'];
             $q = "DELETE FROM `foodcupon` WHERE fid=$fid";
             $run = mysqli_query($connection, $q);
         }
     ?>
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
         
         <div class="container" style="margin-top: 60px;">
             <div class="row">
                 <div class="col-md-9">
                     <form action="foodcupon.php" style="width: 100%;">
                         <input type="text" class="form-control" id="inputSuccess5" name="s_roll" placeholder="Search For...">
                     </form>
                 </div>
                 <div class="col-md-3">
                     <a href="foodcupon.php"><button class="btn btn-success">Refresh</button></a>
                 </div>
             </div>
         </div>
         
         
        <h2 style="color:white;">Food Cupon</h2>
        <!--dropdown menu-->
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Sort According To
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
               <li><a href="foodcupon.php?sort=date">Date</a></li>
                <li><a href="foodcupon.php?sort=hall">Hall</a></li>
            </ul>
        </div>
        <br><br>
        <!--table-->
       <table class="table table-striped"  style="background-color:white";>
       <thead>
            <tr class="info">
                <th>id</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Hall</th>
                <th>Meal Type</th>
                <th>Date</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
           
            <?php
                  $sort_by = 'none';
                  if(isset($_GET['sort'])){
                      $sort_by = $_GET['sort'];
                  }
                  if($sort_by == 'hall'){
                      $food_query = "SELECT foodcupon.fid ,student.sname,student.roll,foodcupon.fhall,foodcupon.fmeal,foodcupon.fdate FROM student,foodcupon WHERE student.user=foodcupon.user ORDER BY foodcupon.fhall";
                  }
                  else if($sort_by == 'date'){
                      $food_query = "SELECT foodcupon.fid ,student.sname,student.roll,foodcupon.fhall,foodcupon.fmeal,foodcupon.fdate FROM student,foodcupon WHERE student.user=foodcupon.user ORDER BY foodcupon.fdate DESC";
                  }
                  else{
                      $food_query = "SELECT foodcupon.fid ,student.sname,student.roll,foodcupon.fhall,foodcupon.fmeal,foodcupon.fdate FROM student,foodcupon WHERE student.user=foodcupon.user";
                  }
                  
                  $run = mysqli_query($connection,$food_query);
                  if(mysqli_num_rows($run) > 0){
                      while($row = mysqli_fetch_array($run)){
                          $foodcupon_fid = $row['fid'];
                          $student_sname = $row['sname'];
                          $student_roll = $row['roll'];
                          $foodcupon_fhall = $row['fhall'];
                          $foodcupon_fmeal = $row['fmeal'];
                          $foodcupon_fdate = $row['fdate'];
                          
            ?>
            <tr>
            <?php
            if(isset($_GET['s_roll']) && $student_roll == $_GET['s_roll']){
            ?>
                <td><?php echo $foodcupon_fid; ?></td>
                <td><?php echo $student_sname; ?></td>
                <td><?php echo $student_roll; ?></td>
                <td><?php echo $foodcupon_fhall; ?></td>
                <td><?php echo $foodcupon_fmeal; ?></td>
                <td><?php echo $foodcupon_fdate; ?></td>
                <td><a href="foodcupon.php?fid=<?php echo $foodcupon_fid; ?>"><button>Delete</button></a></td>
            <?php
            }
            else if(!isset($_GET['s_roll'])){
            ?>
                <td><?php echo $foodcupon_fid; ?></td>
                <td><?php echo $student_sname; ?></td>
                <td><?php echo $student_roll; ?></td>
                <td><?php echo $foodcupon_fhall; ?></td>
                <td><?php echo $foodcupon_fmeal; ?></td>
                <td><?php echo $foodcupon_fdate; ?></td>
                <td><a href="foodcupon.php?fid=<?php echo $foodcupon_fid; ?>"><button>Delete</button></a></td>
            <?php
            }
            ?>
            
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
