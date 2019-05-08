<?php 
ob_start();
require_once('db.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hall View</title>

        <link rel="icon" type="/png" href="img/logo.png">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-view.css">
        <link rel="stylesheet" href="css/Dashboard.css" >
    </head>

    <body style=" ">
      <div class="row">
         <div class="col-md-6">
          
      
       <h1>STUDENT DETAILS:</h1>
        <?php
            if(isset($_GET['id'])){
                  $u_stud_id = $_GET['id'];
                  $stud_query = "SELECT * FROM students WHERE stud_id = $u_stud_id";
                  $stud_run = mysqli_query($connection, $stud_query);
                  $stud_row = mysqli_fetch_array($stud_run);
                  $stud_id = $stud_row['stud_id'];
                  $stud_name = $stud_row['stud_name'];
                  $roll = $stud_row['roll'];
                  $dept = $stud_row['dept'];
                  $contact = $stud_row['contact'];
                  $f_name = $stud_row['f_name'];
                  $f_contact = $stud_row['f_contact'];
                  $m_name = $stud_row['m_name'];
                  $m_contact = $stud_row['m_contact'];
                  $mail =  $stud_row['mail'];
        
        ?>
       
                   <ul class="list-group" style="margin-top:30px;">
                    <li class="list-group-item">Name: <?php echo $stud_name; ?></li>
                    <li class="list-group-item">Roll: <?php echo $roll; ?></li>
                    <li class="list-group-item">Department: <?php echo $dept; ?></li>
                    <li class="list-group-item">Contact: <?php echo $contact; ?></li>
                    <li class="list-group-item">Email: <?php echo $mail; ?></li>
                    <li class="list-group-item">Father's Name: <?php echo $f_name; ?></li>
                    <li class="list-group-item">Father's Contact: <?php echo $f_contact; ?></li>
                    <li class="list-group-item">Mother's Name: <?php echo $m_name; ?></li>
                    <li class="list-group-item">Mother's Contact: <?php echo $m_contact; ?></li>
                    </ul>
        <?php
            }
            else if($_GET['search']){
                $u_stud_id = $_GET['search'];
                $stud_query = "SELECT * FROM students WHERE roll = $u_stud_id";
                $stud_run = mysqli_query($connection, $stud_query);
                  $stud_row = mysqli_fetch_array($stud_run);
                  $stud_id = $stud_row['stud_id'];
                  $stud_name = $stud_row['stud_name'];
                  $roll = $stud_row['roll'];
                  $dept = $stud_row['dept'];
                  $contact = $stud_row['contact'];
                  $f_name = $stud_row['f_name'];
                  $f_contact = $stud_row['f_contact'];
                  $m_name = $stud_row['m_name'];
                  $m_contact = $stud_row['m_contact'];
                  $mail =  $stud_row['mail'];
        ?>
            <ul class="list-group" style="margin-top:30px;">
                    <li class="list-group-item">Name: <?php echo $stud_name; ?></li>
                    <li class="list-group-item">Roll: <?php echo $roll; ?></li>
                    <li class="list-group-item">Department: <?php echo $dept; ?></li>
                    <li class="list-group-item">Contact: <?php echo $contact; ?></li>
                    <li class="list-group-item">Email: <?php echo $mail; ?></li>
                    <li class="list-group-item">Father's Name: <?php echo $f_name; ?></li>
                    <li class="list-group-item">Father's Contact: <?php echo $f_contact; ?></li>
                    <li class="list-group-item">Mother's Name: <?php echo $m_name; ?></li>
                    <li class="list-group-item">Mother's Contact: <?php echo $m_contact; ?></li>
            </ul>
        <?php
            }
            else{
                $u_stud_id = 0;
                $stud_name = "No information Found";
            }
        
        ?>
        </div>
        <div class="col-md-6">
          
        <h1>Food Coupons:</h1>
           <table class="table table-striped"  style="background-color:white;margin-top:30px";>
           <thead>
            <tr class="info">
                <th>Name</th>
                <th>Meal Type</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
           
            <?php
                 
                  $food_query="SELECT student.sname,foodcupon.fmeal,foodcupon.fdate FROM student,foodcupon WHERE student.user=foodcupon.user AND student.roll='".$roll."'";
                  $run = mysqli_query($connection,$food_query);
                  if(mysqli_num_rows($run) > 0){
                      while($row = mysqli_fetch_array($run)){
                         
                          $student_sname = $row['sname'];
                          $foodcupon_fmeal = $row['fmeal'];
                          $foodcupon_fdate = $row['fdate'];
                          
            ?>
            <tr>
             
            
            <td><?php echo $student_sname; ?></td>
            <td><?php echo $foodcupon_fmeal; ?></td>
            <td><?php echo $foodcupon_fdate; ?></td>
          
            
            </tr>
              <?php
                }
                  }
        ?>
        </tbody>
    </table>
        </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
