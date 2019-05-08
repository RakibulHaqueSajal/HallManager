
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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sweetalert2/sweetalert2.css">

  </head>
  
  
  <body style="font-family: cursive; background-image: url(./img/bluebackground.jpg);">
   <?php
    include 'db.php';
    include 'authenticateuser.php';
    $cname=$cabout=$cdescription=$chall=$cdate=$fhall=$fmeal=$fdate=$fuser=$msgmn="";
if(isset($_POST['fsubmit']))
{
    $fhall=mysqli_real_escape_string($connection,$_POST['fhall'] );
    $fmeal=mysqli_real_escape_string($connection,$_POST['fmeal'] );
    $fdate=mysqli_real_escape_string($connection,$_POST['fdate'] );
    $fuser=$_SESSION['username'];
    $query1="INSERT INTO `foodcupon`(`fid`, `user`, `fhall`, `fmeal`, `fdate`) VALUES ('','$fuser','$fhall','$fmeal','$fdate')";
    $run=mysqli_query($connection,$query1);
    if($run==TRUE)
    {
           echo "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Submitted Succefully!',
                                            'success'
                                            );
				          </script>";
         
    }
    else
    {
        echo '<div class="alert alert-warning" style="margin-top:30px";>
                      <strong>Warning!</strong>Submitted unSuccesfully.
                      </div>'; 
    }
    
    
}
else
{
    
}
if(isset($_POST['csubmit']))
{
    $cname=mysqli_real_escape_string($connection,$_POST['cname'] );
    $chall=mysqli_real_escape_string($connection,$_POST['chall'] );
    $cabout=mysqli_real_escape_string($connection,$_POST['cabout'] );
    $cdescription=mysqli_real_escape_string($connection,$_POST['cdescription'] );
    $cdate=mysqli_real_escape_string($connection,$_POST['cdate'] );
    $cuser=$_SESSION['username'];
    
    
    if (!preg_match("/^[a-zA-Z ]*$/",$cname)) {
              $msgsn = strtoupper("Only letters and white space allowed"); 
    }
    
    
    else{
        $query2="INSERT INTO `complainbox`(`cid`, `user`, `cname`, `chall`, `cdate`, `cabout`, `cdescription`) VALUES ('','$cuser','$cname','$chall','$cdate','$cabout','$cdescription')";
        $run1=mysqli_query($connection,$query2);
        if($run1==TRUE)
        {
             echo "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Submitted Succefully!',
                                            'success'
                                            );
				          </script>";
        }
        else
        {
            echo '<div class="alert alert-warning" style="margin-top:30px";>
                          <strong>Warning!</strong>Submitted unSuccesfully.
                          </div>'; 
        }
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
            <li><a href="#">   Welcome,<?php 
                 echo $_SESSION['username']; ?></a></li>
            <li><a href="index.php"><i class="fa fa-sign-out">Sign Out</i></a></li>
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
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>

    </div>
   
    <div class="row">
        <div class="col-md-6" >
             <div class="panel panel-default" style="background-color:lightblue;">
                 <div class="panel-body">   
                               
                        <div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">FOOD CUPON</button></div>                 
                            <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel">FOOD CUPON</h3>
                </div>
                <div class="modal-body">

                    <!-- content goes here -->
                    <form class="" method="post">
                       <div class="form-group">
							<label for="hall" class="cols-sm-2 control-label">Hall</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
									<select class="form-control" id="hall" name="fhall">
                                          <option>Shahid Shahidul Islam Hall</option>
                                          <option>Shahid Abdul Hamid Hall</option>
                                          <option>Tin Shed Hall </option>
                                          <option>Deshratna Sheikh Hasina Hall</option>
                                          <option>Shahid President Ziaur Rahman Hall </option>
                                          <option>Bangabondhu Sheikh Mujibur Rahman Hall </option>
                                          <option>Shahid Lieutenant Salim hall</option>

                                   </select>
								</div>
							</div>
						</div>
                         <div class="form-group">
							<label for="food" class="cols-sm-2 control-label">Meals</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
									<select class="form-control" id="hall" name="fmeal">
                                          <option>Breakfast</option>
                                          <option>Lunch</option>
                                          <option>Dinner</option>
                                   </select>
								</div>
							</div>
						</div>
                         <div class="form-group">
							<label for="contactnumber" class="cols-sm-2 control-label">Date</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="fdate" id="name"  placeholder="Date"/>
								</div>
							</div>
				        </div>
   
                        <div class="btn-group" role="group">
                            <button type="submit"  name="fsubmit" class="btn btn-primary" role="button">Save</button>
                        </div>
                  
                
                  </form>

                </div>
            </div>
          </div>
        </div>
                             </div>
                 </div>
        </div>
        
        <div class="col-md-6">
              <div class="panel panel-default" style="background-color:lightblue;">
                 <div class="panel-body">   
                               
                        <div class="center"><button data-toggle="modal" data-target="#squarespaceModal1" class="btn btn-primary center-block">COMPLAIN BOX</button></div>                 
                            <div class="modal fade" id="squarespaceModal1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel">COMPLAINBOX</h3>
                </div>
                <div class="modal-body">

                    <!-- content goes here -->
                    <form method="post">
                       	<div class="form-group">
							<label for="email" class="cols-sm-2 control-label" class="sr-only">Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="cname" id="email"  placeholder="Enter your Name" required autofocus/>
								</div>
							</div>
						</div>
                       
                        
                       <div class="form-group">
							<label for="hall" class="cols-sm-2 control-label">Hall</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
									<select class="form-control" id="hall" name="chall">
                                          <option>Shahid Shahidul Islam Hall</option>
                                          <option>Shahid Abdul Hamid Hall</option>
                                          <option>Tin Shed Hall </option>
                                          <option>Deshratna Sheikh Hasina Hall</option>
                                          <option>Shahid President Ziaur Rahman Hall </option>
                                          <option>Bangabondhu Sheikh Mujibur Rahman Hall </option>
                                          <option>Shahid Lieutenant Salim hall</option>

                                   </select>
								</div>
							</div>
						</div>
                        <div class="form-group">
							<label for="contactnumber" class="cols-sm-2 control-label">Date</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="cdate" id="name"  placeholder="Date"/>
								</div>
							</div>
				        </div>
   
                        <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">About</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-indent fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="cabout" id="email"  placeholder="About" required autofocus/>
								</div>
							</div>
						</div>
                         <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Description</label>
							<div class="cols-sm-10">
								<div class="input-group">
								 <span class="input-group-addon"><i class="fa fa-indent fa" aria-hidden="true"></i></span>
								 <textarea class="form-control counted" name="cdescription" placeholder="Describe Your Complain" required autofocus rows="5" style="margin-bottom:10px;"></textarea>
								</div>
							</div>
						</div>
                         
                     
                        
                        <div class="btn-group" role="group">
                            <button type="submit" id="saveImage" class="btn btn-default btn-hover-green" name="csubmit" data-action="save" role="button">Save</button>
                        </div>
                    
                 
                     </form>

                </div>
            </div>
          </div>
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </body>
</html>