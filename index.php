<?php
// Start the session
session_start();
require 'dbconnect.php';
$phone_user_id = $_SESSION['phone-user-id'];
//echo $phone_user_id;
?>

<html>
<head>
    <title>DocFinder | Home</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="jquery/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!--<script src="js/jquery.easing.min.js"></script> -->
    <!-- <script src="js/scrolling-nav.js"></script> -->
  
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- external links for my LOGOS -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

  
</head>
	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
		      </button>
		      <a><img class="img-responsive" src="images/logo.png" style="width: 150px"></a>
		    </div>	
			<div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav navbar-right">
			      <li class="active"><a href="index.php" class="page-scroll">Home</a></li>
			      <li><a href="aboutus.html" class="page-scroll">About us</a></li>
			      <li><a href="log/doctor_login.php" class="page-scroll">Doctor</a></li> 
			      <li><a href="log/patient_login.php" class="page-scroll">Patient</a></li> 
			    </ul>
			</div>
		  </div>
		</nav>

	<div class="main-banner" style="width:100%;" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1>ABOUT US</h1> 
            
          
       
            <h2 align=center>SEARCH</h2>
		          <form action="result.php" method="post" align="center">
		            <div class="form-group">
		              <label for="username">Search:</label>
		              <input type="text" class="form-control" name="search"  placeholder="Enter username">
		            </div>
		            </center><button type="submit" class="btn btn-default">Submit</button>
		          </form>

		    <p>A web app where you can search for a Doctor with specific specialization (you can search by disease/illness, body parts, etc) nearby your location. The target users for this app are the locals of Iligan City. Anyone who needs a service of a doctor may use this app. The developers witnessed an existing problem in Iligan City concerning the availability and visibility of specialized doctors and has came up to this web app idea that could be a solution to the said problem in Iligan City. DocFinder is a  web app where you can search for a Doctor with specific specialization (you can search by disease/illness, body parts, etc) nearby your location. The said application has a search feature where the users could do the actual searching for doctors. It can also show the list of doctors available and details about the doctor. Users could also bookmark a doctor for future references. </p><br>
  
		              </div>
        </div>
      </div>
    </div>

	</body>

	<footer class = "footer" id = "navCon1">
    
        <div class="footer-logo"><center>
          <a href="index.html"><img class="img-responsive" src="images/lollipop_logo.png" style="width: 150px"></a>
        </div>
      </center>

      <div>
        <p>
        <center>
            <p>© 2016 JA Andog | RG Cabrera | JC Campos</p>
        </center>
      </div>

    
  </footer>
</head>