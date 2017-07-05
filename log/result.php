<?php
// Start the session
session_start();
require 'dbconnect.php';
$phone_user_id = $_SESSION['phone-user-id'];
$search=$_POST['search'];
//echo $phone_user_id;
?>

<html>
<head>
    <title>DocFinder | List</title>
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
		      <a><img class="img-responsive" src="css/logo.png" style="width: 150px"></a>
		    </div>
			<div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav navbar-right">
			      <li class="active"><a href="search.php" class="page-scroll">Search</a></li>
			      <li><a href="patient.html" class="page-scroll">Bookmarked</a></li>
			      <li><a href="p_messages.php" class="page-scroll">Messages</a></li> 
			      <li><a href="logout.php" class="page-scroll">Log out</a></li> 
			    </ul>
			</div>
		  </div>
		</nav>

	<?php
		$query=mysqli_query($conn,"SELECT * FROM doctor WHERE name='$search' or last_name='$search' or first_name ='$search' or middle_name='$search' or specialization='$search' ");
		
	?>
	<div class="main-banner" style="width:100%;" id="about">
      <div class="container">
        <div class="row">
        	<div class="col-sm-12">
	          	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
					<thead>
						<tr>
							<th>Fullname</th>
							<th>Specialization</th>
							<th>Clinic Address</th> <?php //course ?>
							<th>Clinic Hours</th> <?php //deparment ?>
							<th>Email</th> <?php //college ?>
							<th>Contact Number</th>
							<th>Profile</th>
						</tr>
					<tbody>
					<?php
						while($contacts_row = mysqli_fetch_assoc($query)){
							echo "<tr><td>$contacts_row[name]</td>";
							echo "<td>$contacts_row[specialization]</td>";
							echo "<td>$contacts_row[clinic_add]</td>";
							echo "<td>$contacts_row[clinic_hours]</td>";
							echo "<td>$contacts_row[email]</td>";
							echo "<td>$contacts_row[contact]</td>";
							echo "<td><a href=\"profile_doctor.php?id=$contacts_row[doc_id]\">View Profile</a></td>";
							/*
							echo "<td><a href=\"delete.php?id=$contacts_row[ID]\">Delete</a></td>";*/
							
						}
					?>
					</tbody>
				</table>
        	</div>
        </div>
      </div>
    </div>


	</body>

	<footer class = "footer" id = "navCon1">
    
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
</head>