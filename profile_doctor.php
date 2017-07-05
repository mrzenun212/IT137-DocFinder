<?php
// Start the session
session_start();
require 'dbconnect.php';

$doc_id = $_GET['id'];
$query=mysqli_query($conn,"SELECT * FROM doctor WHERE doc_id =$doc_id");
$row=mysqli_fetch_assoc($query);
$name = $row['first_name'];



//echo $phone_user_id;
?>

<html>
<head>
    <title>Doctor's Profile</title>
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
		      <!-- <a class="navbar-brand" href="#">Hello Dr. <?php echo $name; ?>!</a> -->
		    </div>
			<div class="collapse navbar-collapse" id="myNavbar">
			   <ul class="nav navbar-nav navbar-right">
			      <li><a href="index.php" class="page-scroll">Home</a></li>
			      <li><a href="aboutus.html" class="page-scroll">About us</a></li>
			      <li><a href="log/doctor_login.php" class="page-scroll">Doctor</a></li> 
			      <li><a href="log/patient_login.php" class="page-scroll">Patient</a></li> 
			    </ul>
			</div>
		  </div>
		</nav>

		<div class="container">
			<div class="row">
				<br>
				<?php 
						echo "NAME: " . "$row[name]" . "<br>";
						echo "UNDERGRAD: " . "$row[undergrad]" . "<br>";
						echo "PROFESSIONAL STATEMENT: " . "$row[prof_state]" . "<br>";
						echo "SPECIALIZATION: " . "$row[specialization]" . "<br>";
						echo "EMAIL ADDRESS" . "$row[email]" . "<br>";
						echo "HOME ADDRESS: " . "$row[address]" . "<br>";
						echo "CONTACT: " . "$row[contact]" . "<br>";
						echo "HOSPITAL: " . "$row[hospital]" . "<br>";
						echo "CLINIC ADDRESS: " . "$row[clinic_add]" . "<br>";
						echo "CLINIC HOURS: " . "$row[clinic_hours]" . "<br>";
				?>
				
			</div>
		</div>


	</body>
</html> 