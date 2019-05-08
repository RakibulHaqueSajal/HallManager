<?php 
ob_start();
require_once('db.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Castle of Learning</title>

        <link rel="icon" type="image/png" href="#">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/Dashboard.css" class="">
    </head>

    <body>
       >
        <?php
            
            if(isset($_GET['hall'])){
                  $u_hall_id = $_GET['hall'];
                  $hall_query = "SELECT * FROM halls WHERE hall_id = $u_hall_id";
                  $hall_run = mysqli_query($connection, $hall_query);
                  $hall_row = mysqli_fetch_array($hall_run);
                  $hall_name = $hall_row['hall_name'];
            }
            else{
                $u_hall_id = 0;
                $hall_name = "Select Your Desired Hall";
            }
        
            if(isset($_GET['floor'])){
                  $u_floor_id = $_GET['floor'];
                  $floor_query = "SELECT * FROM floors WHERE hall_id = $u_hall_id AND floor_id = $u_floor_id";
                  $floor_run = mysqli_query($connection, $floor_query);
                  $floor_row = mysqli_fetch_array($floor_run);
                  $floor_name = $floor_row['floor_name'];
            }
            else{
                $u_floor_id = 0;
            }
        
            if(isset($_GET['room'])){
                  $u_room_id = $_GET['room'];
                  $room_query = "SELECT * FROM rooms WHERE hall_id = $u_hall_id AND floor_id = $u_floor_id AND room_no = $u_room_id";
                  $room_run = mysqli_query($connection, $room_query);
                  $room_row = mysqli_fetch_array($room_run);
                  $room_name = $room_row['room_no'];
            }
            else{
                $u_room_id = 0;
            }
        
        
        ?>
        <button><a href="view.php">Home</a></button>
        
        <div  style="margin-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width: 100%;">
                            <?php echo $hall_name ?>
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <?php
                              $query = "SELECT * FROM halls ORDER BY hall_id ASC";
                              $run = mysqli_query($connection,$query);
                              if(mysqli_num_rows($run) > 0){
                                  while($row = mysqli_fetch_array($run)){
                                      $hall_name = ucfirst($row['hall_name']);
                                      $hall_id = $row['hall_id'];
                                      echo "<li><a class='dropdown-item' href='view.php?hall=".$hall_id."'>$hall_name</a></li>";
                                  }
                              }
                              else{
                                  echo "<li><a class='dropdown-item' href='#'>No Halls Yet</a></li>";
                              }
                            ?>
                          </ul>
                        </div>
                        
                        <br>
                        <?php
                              $floor_query = "SELECT * FROM floors WHERE hall_id=$u_hall_id ORDER BY floor_id ASC";
                              $run = mysqli_query($connection,$floor_query);
                              if(mysqli_num_rows($run) > 0){
                                  while($row = mysqli_fetch_array($run)){
                                      $floor_name = ucfirst($row['floor_name']);
                                      $floor_id = $row['floor_id'];
                                      echo "<button><a class='dropdown-item' href='view.php?hall=".$u_hall_id."&floor=".$floor_id."'>$floor_name</a></button>";
                                  }
                              }
                              else{
                                  echo "<center><label>Select Hall To Get Floors</label></center>";
                              }
                        ?>
                        <br>
                        <br>
                        <?php
                              $room_query = "SELECT * FROM rooms WHERE hall_id=$u_hall_id AND floor_id=$u_floor_id ORDER BY room_no ASC";
                              $run = mysqli_query($connection,$room_query);
                              if(mysqli_num_rows($run) > 1){
                                  while($row = mysqli_fetch_array($run)){
                                      $room_name = ucfirst($row['room_no']);
                                      $room_id = $row['room_no'];
                                      echo "<button><a class='dropdown-item' href='view.php?hall=".$u_hall_id."&floor=".$u_floor_id."&room=".$room_id."'>$room_name</a></button>";
                                  }
                              }
                              else{
                                  echo "<center><label>Select Floors To Get Rooms</label></center>";
                              }
                        ?>
                        <br>
                        <br>
                        <?php
                              $stud_query = "SELECT * FROM students WHERE hall_id=$u_hall_id AND floor_id=$u_floor_id AND room_no=$u_room_id ORDER BY stud_id ASC";
                              $stud_run = mysqli_query($connection,$stud_query);
                              if(mysqli_num_rows($stud_run) > 0){
                                  while($row = mysqli_fetch_array($stud_run)){
                                      $stud_name = ucfirst($row['stud_name']);
                                      echo "$stud_name<br>";
                                  }
                              }
                              else{
                                  echo "<center><label>Select Room To Get Students List</label></center>";
                              }
                        ?>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
