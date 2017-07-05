<?php
// Start the session
session_start();
require 'dbconnect.php';
$phone_user_id = $_SESSION['phone-user-id'];

$query=mysqli_query($conn,"SELECT * FROM doctor WHERE name=(SELECT fullname FROM user WHERE id='$phone_user_id') ");
$row=mysqli_fetch_assoc($query);
$name = $row['first_name'];
$doc_id = $row['doc_id'];



//echo $phone_user_id;
?>

<html>
<head>
    <title>DocFinder | Doctor Profile</title>
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
		      <a class="navbar-brand" href="#">Hello Dr. <?php echo $name; ?>!</a>
		    </div>
			<div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav navbar-right">
			      <li class="active"><a href="doctor.php" class="page-scroll">Profile</a></li>
			      <li><a href="messages.php" class="page-scroll">Messages</a></li>
			      <li><a href="logout.php" class="page-scroll">Logout</a></li> 
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
						echo "EMAIL ADDRESS: " . "$row[email]" . "<br>";
						echo "HOME ADDRESS: " . "$row[address]" . "<br>";
						echo "CONTACT: " . "$row[contact]" . "<br>";
						echo "HOSPITAL: " . "$row[hospital]" . "<br>";
						echo "CLINIC ADDRESS: " . "$row[clinic_add]" . "<br>";
						echo "CLINIC HOURS: " . "$row[clinic_hours]" . "<br>";
					
				?>
			</div>
		</div>


	</body>

	<footer class = "footerA" id = "navCon1">
    
        <div class="footer-logo"><center>
          <a href="index.html"><img class="img-responsive" src="css/lollipop_logo.png" style="width: 150px"></a>
        </div>
      </center>

      <div>
        <p>
        <center>
            <p>© 2016 JA Andog | RG Cabrera | JC Campos</p>
        </center>
      </div>

    
  </footer>
</html> 