<?php
// Start the session
session_start();
require 'dbconnect.php';
$phone_user_id = $_SESSION['phone-user-id'];
echo $phone_user_id;
$query=mysqli_query($conn,"SELECT * FROM user WHERE id='$phone_user_id'");
$row=mysqli_fetch_assoc($query);
$name = $row['fullname'];
?>

<html>
<head>
    <title>DocFinder | Bookmark</title>
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
		      <a class="navbar-brand" href="#">Hello <?php echo $name; ?>!</a>
		    </div>
			<div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav navbar-right">
			      <li ><a href="search.php" class="page-scroll">Search</a></li>
			      <li class="active"><a href="patient.php" class="page-scroll">Bookmark</a></li>
			      <li><a href="p_messages.php" class="page-scroll">Messages</a></li>
			      <li><a href="logout.php" class="page-scroll">Log Out</a></li>
			    </ul>
			</div>
		  </div>
		</nav>

		<?php 

			$contacts_query=mysqli_query($conn,"SELECT * FROM bookmark WHERE user_id = '$phone_user_id'");
		/*	if($bm_query){
				echo "<p>wew</p>";
			}*/
			if(mysqli_num_rows($contacts_query)==0){
				?>
				<strong>No contacts found! </strong>
				<?php
			}else{
				?>
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
					<thead>
						<tr>
							<th>Full name</th>
							<th>Specialization</th>
							<th>Contact</th> <?php //college ?>
							<th>Profie</th>
						</tr>
					<tbody>
					<?php
						while($contacts_row = mysqli_fetch_assoc($contacts_query)){
							echo "<tr><td>$contacts_row[fullname]</td>";
							echo "<td>$contacts_row[specialization]</td>";
							echo "<td>$contacts_row[contact]</td>";
							echo "<td><a href=\"profile_doctor.php?id=$contacts_row[doc_id]\">View Profile</a></td>";
							
							
						}
					?>
					</tbody>
				</table>
				<?php
			}
			?>
	

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