
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
    <link rel="stylesheet" href="css/studentreg.css">

 
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
               <div class="col-md-10">
                <div class="form-group  has-feedback">
                   <input type="text" class="form-control" id="inputSuccess5" placeholder="Enter Roll Number For search">
                    <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="col-md-2">
                  <button class="btn btn-md btn-primary btn-block" type="button" name="search">Search</button>
              </div>
       
              
         </div>
        <h2 style="color:white;">Notice</h2>
        <!--dropdown menu-->
          <div class="row">
           <div class="col-md-3" >
             <div class="panel panel-default" style="background-color:lightblue;">
                 <div class="panel-body">   
                               
                        <div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary btn-md center-block">Add Notice </button></div>                 
                            <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
               <h3 class="modal-title" id="lineModalLabel">Notice</h3>
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
							<label for="contactnumber" class="cols-sm-2 control-label">Date</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="fdate" id="name"  placeholder="Date"/>
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
                     
                      <div class="col-sm-10">
                           <div class="input-group">
                               
                            <span class="input-group-btn">
                                <button id="fake-file-button-browse" type="button" class="btn btn-default">
                                    <span class="glyphicon glyphicon-file"></span>
                                </button>
                            </span>
                            <input type="file" id="files-input-upload" style="display:none">
                            <input type="text" id="fake-file-input-name"  placeholder="File not selected" class="form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default" disabled="disabled" id="fake-file-button-upload">
                                    <span class="glyphicon glyphicon-upload"></span>
                                </button>
                            </span>
                            <small class="pull-right"> <a href="http://nonamez.name/en/about" target="_blank"></a></small>
                        </div>
                        </div>
                        </div>
                        
                        <script type="text/javascript">
                        // Fake file upload
                        document.getElementById('fake-file-button-browse').addEventListener('click', function() {
                            document.getElementById('files-input-upload').click();
                        });

                        document.getElementById('files-input-upload').addEventListener('change', function() {
                            document.getElementById('fake-file-input-name').value = this.value;

                            document.getElementById('fake-file-button-upload').removeAttribute('disabled');
                        });
                        </script>
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
            </tr>
        </thead>
        <tbody>
            <tr>
        <!--first example-->
            <td>1</td>
            <td>Md Rakibul Haque</td>
            <td>143004</td>
            <td>Shahid Abdul Hamid Hall</td>
            <td>breakfast</td>
            <td>07/24/2016</td>
        </tr>
        <tr>
        <!--second example-->
            <td>1</td>
            <td>Md Rakibul Haque</td>
            <td>143004</td>
            <td>Shahid Abdul Hamid Hall</td>
            <td>breakfast</td>
            <td>07/24/2016</td>
        </tr>
        <tr>
        <!--third example-->
            <td>1</td>
            <td>Md Rakibul Haque</td>
            <td>143004</td>
            <td>Shahid Abdul Hamid Hall</td>
            <td>breakfast</td>
            <td>07/24/2016</td>
        </tr>
        </tbody>
    </table>
  

    
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
  </body>
</html>
