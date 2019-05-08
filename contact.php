
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/contact.css"/>
        <link rel="stylesheet" href="css/home.css"/>
        <link rel="stylesheet" href="css/about.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <script src="sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="sweetalert2/sweetalert2.css">
        <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
       <?php
    include 'db.php';
    $nm=$em=$fb=$mobile="";
    if(isset($_POST['csubmit']))
    {
        $nm=mysqli_real_escape_string($connection,$_POST['nm']);
        $em=mysqli_real_escape_string($connection,$_POST['em']);
        $fb=mysqli_real_escape_string($connection,$_POST['fb']);
        $mobile=mysqli_real_escape_string($connection,$_POST['mobile']);
        $c_query="INSERT INTO `feedback`(`id`, `Name`, `Mobile`, `email`, `feedback`) VALUES ('','$nm','$mobile','$em','$fb')";
        $run=mysqli_query($connection,$c_query);
        if($run==TRUE)
        {
            echo "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Feedback Submitted Succefully!',
                                            'success'
                                            );
				          </script>";
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
                  <div class="col-xs-9"><a class="navbar-brand" href="index.html">RUET</a></div>
              </div>
          </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
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
            <li><a href="contact.php"><i class="fa fa-phone"></i> Contact Us</a></li>
            <li><a href="signin.php"><i class="fa fa-sign-in"></i> Sign In</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-paw"></i> Sign Up<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="student.php">Student</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="provost.php">Provost</a></li>
                <li><a href="provost.php">Assistant Provost</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav> <!-- Navbar Finished -->
    
    
    <!-- 02. Jumbotron from Bootstrap.com -->
    <div class="jumbotron upper">
        <div class="container">
            <div id="details" class="animated fadeInLeft">
                <h1 style="font-family: cursive;">RUET <span style="font-family: cursive;">Hall Manager</span></h1>
                <p>A System Design To Run Hall In An Efficient Way</p>
            </div>
        </div>
        <img src="img/top-image.jpg" alt="Top Image">
    </div> <!-- End of Jumbotron -->
      
  <div class="row">
      <div class="col-md-12">
          <br>
          <br>
      </div>
  </div>
  
  <div class="container-fluid" id="main">
  <div class="container animated fadeIn" >

  <div class="row">
    <h1 class="header-title"> Contact </h1>
    <hr>
    <div class="col-sm-12" id="parent">
    	<div class="col-sm-6">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.509640278923!2d88.62618861457548!3d24.363568284290572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefd0a55ea957%3A0x2f9cac3357d62617!2sRajshahi+University+of+Engineering+%26+Technology!5e0!3m2!1sen!2sbd!4v1502427243704" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    	</div>

    	<div class="col-sm-6">
    		<form action="" class="contact-form" method="post">
	
		        <div class="form-group">
		          <input type="text" class="form-control" id="name" name="nm" placeholder="Name" required="" autofocus="">
		        </div>
		    
		    
		        <div class="form-group form_left">
		          <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
		        </div>
		    
		      <div class="form-group">
		           <input type="text" class="form-control" id="phone" name="mobile"  placeholder="Mobile No." required="">
		      </div>
		      <div class="form-group">
		      <textarea class="form-control textarea-contact" rows="5" id="comment" name="fb" placeholder="Type Your Message/Feedback here..." required=""></textarea>
		      <br>
	      	  <button class="btn btn-default btn-send" name="csubmit"> <span class="glyphicon glyphicon-send"></span> Send </button>
		      </div>
     		</form>
    	</div>
    </div>
  </div>

  <div class="container second-portion">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">MAIL & WEBSITE</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp rakibulhaq56@gmail.com
							<br>
							<br>
							<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.ruet.ac.bd
						</p>
					
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">CONTACT</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp +8801711XXXXXX
							<br>
							<br>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp +880196XXXXXX
						</p>
						
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">ADDRESS</h3>
    					<p>
							 <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 6204,, Rajshahi - Dhaka Hwy, Rajshahi, Bangladesh
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    
		
	    
	</div>
</div>

</div>
        </div>
       
        
        
    

   
	</body>
		 
</html>
