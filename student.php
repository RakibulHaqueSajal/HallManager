
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studentreg.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <script src="sweetalert2/sweetalert2.min.js"></script>
	   <link rel="stylesheet" type="text/css" href="sweetalert2/sweetalert2.css">

     <title>Student Registration</title>
	</head>
	<body>
    <?php
    include 'db.php';
    
       $sname=$scontact=$fname=$fcontact=$mname=$mcontact=$sroll=$sroom=$dept=$hall=$email=$username=$password=$password1="";
       $msgsn=$msgsc=$msgfn=$msgfc=$msgmn=$msgmc=$msgroll=$msgroom=$msgmail=$msgpass=$msguser="";
    
    if(isset($_POST['submit']))
    { 
      
      
        $sname= mysqli_real_escape_string($connection,$_POST['sname']);
        $scontact= mysqli_real_escape_string($connection,$_POST['scontact']);
        $fname= mysqli_real_escape_string($connection,$_POST['fname']);
        $fcontact= mysqli_real_escape_string($connection,$_POST['fcontact']);
        $mname= mysqli_real_escape_string($connection,$_POST['mname']);
        $mcontact= mysqli_real_escape_string($connection,$_POST['mcontact']);
        $sroll= mysqli_real_escape_string($connection,$_POST['sroll']);
        $sroom= mysqli_real_escape_string($connection,$_POST['sroom']);
        $dept= mysqli_real_escape_string($connection,$_POST['dept']);
        $hall= mysqli_real_escape_string($connection,$_POST['hall']);
       
       
        $email1= mysqli_real_escape_string($connection,$_POST['email']);
        $email =filter_var($email1, FILTER_SANITIZE_EMAIL);
        $username= mysqli_real_escape_string($connection,$_POST['username']);
        $password= mysqli_real_escape_string($connection,md5($_POST['password']));
        $password1= mysqli_real_escape_string($connection,md5($_POST['password1']));
        $hash = md5( rand(0,1000) ); 

        
      if (!preg_match("/^[a-zA-Z ]*$/",$sname)) {
              $msgsn = strtoupper("Only letters and white space allowed"); 
       }
      else if(!preg_match("/^[0-9]*$/", $scontact))
              {
                  $msgsc=strtoupper("Invalid Contact Number");
              }

       else if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
              $msgfn= strtoupper("Only letters and white space allowed"); 
       }
       else if(!preg_match("/^[0-9]*$/", $fcontact))
              {
                  $msgfc=strtoupper("Invalid Contact Number");
              }
       else if (!preg_match("/^[a-zA-Z ]*$/",$mname))
       {
              $msgmn = strtoupper("Only letters and white space allowed"); 
       }
       else if(!preg_match("/^[0-9]*$/", $mcontact))
              {
                  $msgmc=strtoupper("Invalid Contact Number");
              }
      else if(!preg_match("/^[0-9]*$/", $sroll))
              {
                  $msgroll=strtoupper("Invalid Roll  Number");
              }
       else if(!preg_match("/^[0-9]*$/", $sroom))
              {
                  $msgroom=strtoupper("Invalid Room  Number");
              }
      else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
       {
               $msgmail=strtoupper("Invalid Email Adress");
       }
       else if ($password!==$password1)
       {
           $msgpass=strtoupper("Password dosen't match");
                    
       }
           
    else
    {    
        
        $query= "INSERT INTO `student`(`uid`, `sname`, `scon`, `fname`, `fcon`, `mname`, `mcon`, `roll`, `room`,`dept`,`hall`,`user`, `email`, `pass`,`hash`) VALUES ('','$sname','$scontact','$fname','$fcontact','$mname','$mcontact','$sroll','$sroom','$dept','$hall','$username','$email','$password','$hash')";
       
        $sql="SELECT * FROM student WHERE student.user = '".$username."'";
        $res1=mysqli_query($connection,$sql);
        if(mysqli_num_rows($res1)>0)
        {
            $msguser=strtoupper("User Already Exists");
        }
        else
        {
    
        $res= mysqli_query($connection,$query);
        if ($res==TRUE)
            {   

                        echo "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
                       $query_1="SELECT halls.hall_id ,halls.hall_name FROM student,halls WHERE halls.hall_name='".$hall."';";
                       $res2=mysqli_query($connection,$query_1);
                       $hall_row=mysqli_fetch_array($res2);
                       $hall_id=$hall_row['hall_id'];
                       $floor_id=intval($sroom/100);
                       $query_2="INSERT INTO `students`(`stud_id`, `stud_name`, `hall_id`, `floor_id`, `room_no`, `roll`, `dept`, `contact`, `f_name`, `f_contact`, `m_name`, `m_contact`, `mail`) VALUES('','$sname','$hall_id','$floor_id','$sroom','$sroll','$dept','$scontact','$fname','$fcontact','$mname','$mcontact','$email');";
                       $res3=mysqli_query($connection,$query_2);
                       /* $to      = $email; // Send email to our user
                        $subject = 'Signup | Verification'; // Give the email a subject 
                        $message = '

                        Thanks for signing up!
                        Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

                        Please click this link to activate your account:
                        http://www.yourwebsite.com/verify.php?email='.$email.'&hash='.$hash.'

                        '; // Our message above including the link

                        $headers = 'From:ruethallmanager@gmail.com' . "\r\n"; // Set from headers
                        mail($to, $subject, $message, $headers); //*/
            }
            else
            {
                echo 'unsuccessful';
            }
        }
    }


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
                  <div class="col-xs-9"><a class="navbar-brand" href="index.php">RUET</a></div>
              </div>
          </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
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
            <li><a href="contact.html"><i class="fa fa-phone"></i> Contact Us</a></li>
            <li><a href="signin.php"><i class="fa fa-sign-in"></i> Sign In</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-paw"></i> Sign Up<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="student.html">Student</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="provost.html">Provost</a></li>
                <li><a href="provost.html">Assistant Provost</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav> <!-- Navbar Finished -->
    
    <!-- 02. Jumbotron from Bootstrap.com -->
    
    <div class="clearfix">
        <br>
        <br>
    </div>
    <div class="jumbotron-up"style="margin-top: 40px; " >
        <div class="container">
            <div id="details" class="animated fadeInLeft">
                <h1 style="font-family: cursive;">RUET <span style="font-family: cursive;">Hall Manager</span></h1>
                <p>A System Design To Run Hall In An Efficient Way</p>
            </div>
        </div>
   
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h1>Registration form for students</h1>
					<form class="" method="post" action="">
						
						<div class="form-group">
                             <div class="row">
                                 <div class="col-md-6">
				          <label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="sname" id="sname"  placeholder="Enter your Name"/>
								</div>
								<div>
								 <p><span style="color:red" font size="16px";><?php echo $msgsn ?></span></p>
								</div>
							</div>
                                 </div>
                                 <div class="col-md-6">
                        <div class="form-group">
							<label for="contactnumber" class="cols-sm-2 control-label">Contact Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="scontact" id="contact"  placeholder="Enter your Contact Number"/>
								</div>
								<div>
								 <p><span style="color:red" font size="16px";><?php echo $msgsc ?></span></p>
								</div>
							</div>
				        </div>
                                 </div>
                           </div>
                        </div>
                        <div class="form-group">
                             <div class="row">
                                 <div class="col-md-6">
				          <label for="name" class="cols-sm-2 control-label">Father's Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="fname" id="name"  placeholder="Enter your Father's Name"/>
								</div>
								<div>
								 <p><span style="color:red" font size="16px";><?php echo $msgfn ?></span></p>
								</div>
							</div>
                                 </div>
                                 <div class="col-md-6">
                        <div class="form-group">
							<label for="contactnumber" class="cols-sm-2 control-label">Contact Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="fcontact" id="name"  placeholder="Enter your Father's Contact Number"/>
								</div>
								<div>
								 <p><span style="color:red" font size="16px";><?php echo $msgfc ?></span></p>
								</div>
							</div>
				        </div>
                                 </div>
                           </div>
                        </div>
                        <div class="form-group">
                             <div class="row">
                                 <div class="col-md-6">
				          <label for="name" class="cols-sm-2 control-label">Mother's Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="mname" id="name"  placeholder="Enter your Mother's Name"/>
								</div>
								<div>
								 <p><span style="color:red" font size="16px";><?php echo $msgmn ?></span></p>
								</div>
							</div>
                                 </div>
                                 <div class="col-md-6">
                        <div class="form-group">
							<label for="contactnumber" class="cols-sm-2 control-label">Contact Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="mcontact" id="name"  placeholder="Enter your Mother's Contact Number"/>
								</div>
								<div>
								 <p><span style="color:red" font size="16px";><?php echo $msgmc ?></span></p>
								</div>
							</div>
				        </div>
                                 </div>
                           </div>
                        </div>
                        <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Department</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
									<select class="form-control" id="dept" name="dept">
                                          <option>Department of Computer Science & Engineering (CSE)</option>
                                          <option>Department of Electrical & Electronic Engineering (EEE)</option>
                                          <option>Department of Electronics & Telecommunication Engineering </option>
                                          <option>Department of Electrical & Computer Engineering(ECE)</option>
                                          <option>Department of Industrial & Production Engineering (IPE) </option>
                                          <option>Department of Glass & Ceramic Engineering </option>
                                          <option>Department of Mechatronics Engineering (MTE) </option>
                                          <option>Department of Mechanical Engineering (ME) </option>
                                          <option>Department of Material Science & Engineering (MSE) </option>
                                          <option>Department of Chemical & Food Process Engineering (CFPE) </option>
                                          <option>Department of Civil Engineering (CE) </option>
                                          <option>Department of Urban & Regional Planning (URP) </option>
                                          <option>Department of Architecture (Arch.) </option>
                                          <option>Department of Building Engineering & Construction Management (BECM) </option>
                                          
                                   </select>
								</div>
							</div>
						</div>
                         <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Hall</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
									<select class="form-control" id="hall" name="hall">
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
                             <div class="row">
                                 <div class="col-md-6">
				          <label for="name" class="cols-sm-2 control-label">Roll</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="sroll" id="floor"  placeholder="Enter your Roll Number"/>
								</div>
								<div>
								 <p><span style="color:red" font size="16px";><?php echo $msgroll ?></span></p>
								</div>
							</div>
                                 </div>
                                 <div class="col-md-6">
                        <div class="form-group">
							<label for="contactnumber" class="cols-sm-2 control-label">Room Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="sroom" id="room"  placeholder="Enter your Room Number"/>
								</div>
								
								<div>
								 <p><span style="color:red" font size="16px";><?php echo $msgroom ?></span></p>
								</div>
								
							</div>
				        </div>
                                 </div>
                           </div>
                        </div>
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
                                <div>
								 <p><span style="color:red" font size="16px";><?php echo $msgmail ?></span></p>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
                                <div>
								 <p><span style="color:red" font size="16px";><?php echo $msguser ?></span></p>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password1" id="confirm"  placeholder="Confirm your Password"/>
								</div>
                                <div>
								 <p><span style="color:red" font size="16px";><?php echo $msgmc ?></span></p>
								</div>
							</div>
						</div>
                       <div  class="clearfix">
                           <div>
								 <p><span style="color:red" font size="16px";><?php echo $msgpass ?></span></p>
								</div>
                             <br> 
                            
                        </div>
						<div class="form-group ">
							<button type="submit" name="submit" class="btn btn-default btn-block">Register</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>