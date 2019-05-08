<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/provostreg.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Provost Reistration</title>
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
              <li><a href="signin.php"><i class="fa fa-sign-in"></i>Sign in</a></li>
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
    <div class="jumbotron-up"style="margin-top: 30px; background-image: url(/img/top-image.jpg)" >
        <div class="container">
            <div id="details" class="animated fadeInLeft">
                <h1 style="font-family: cursive;">RUET <span style="font-family: cursive;">Hall Manager</span></h1>
                <p>A System Design To Run Hall In An Efficient Way</p>
            </div>
        </div>
   
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h1>Registration form </h1>
					<form class="" method="post" action="#">
						
						<div class="form-group">
                             <div class="row">
                                 <div class="col-md-6">
				          <label for="name" class="cols-sm-2 control-label">First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your First Name"/>
								</div>
							</div>
                                 </div>
                                 <div class="col-md-6">
                        <div class="form-group">
							<label for="contactnumber" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Last  Name"/>
								</div>
							</div>
				        </div>
                                 </div>
                           </div>
                        </div>
                          <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Designation</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
									<select class="form-control" id="hall">
                                          <option>Professor</option>
                                          <option>Associate Professor</option>
                                          <option>Asistant Professor </option>
                                          <option>Lecturer </option>
                                         
                                   </select>
								</div>
							</div>
						</div>
                        <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Department</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
									<select class="form-control" id="dept">
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
									<select class="form-control" id="hall">
                                          <option>Shahid Shahidul Islam Hall</option>
                                          <option>Shahid Abdul Hamid Hall</option>
                                          <option>Tin Shed Hall </option>
                                          <option>Deshratna Sheikh Hasina Hall</option>
                                          <option>Shahid President Ziaur Rahman Hall </option>
                                          <option>Bangabondhu Sheikh Mujibur Rahman Hall </option>
                                          <option>Shahid Lieutenant Salim hall</option>
                                          <
                                   </select>
								</div>
							</div>
						</div>
                          <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Hall Post</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
									<select class="form-control" id="hall">
                                          <option>Provost</option>
                                          <option>Assistant Provost</option>
                                         
                                   </select>
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
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
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
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<a href="http://deepak646.blogspot.in" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Register</a>
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