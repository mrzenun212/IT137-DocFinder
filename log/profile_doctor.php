<?php
// Start the session
session_start();
require 'dbconnect.php';
$phone_user_id = $_SESSION['phone-user-id'];
echo $phone_user_id;
$doc_id = $_GET['id'];
$query=mysqli_query($conn,"SELECT * FROM doctor WHERE doc_id =$doc_id");
$row=mysqli_fetch_assoc($query);
$name = $row['first_name'];
$fullname = $row['name'];
$specialization = $row['specialization'];
$contact = $row['contact'];


//echo $phone_user_id;
?>

<html>
<head>
    <title>DocFinder | Doctor</title>
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
			    	<li ><a href="search.php" class="page-scroll">Search</a></li>
			      <li class="active"><a href="patient.php" class="page-scroll">Profile</a></li>
			      <li><a href="p_messages.php" class="page-scroll">Messages</a></li>
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
						echo "EMAIL ADDRESS" . "$row[email]" . "<br>";
						echo "HOME ADDRESS: " . "$row[address]" . "<br>";
						echo "CONTACT: " . "$row[contact]" . "<br>";
						echo "HOSPITAL: " . "$row[hospital]" . "<br>";
						echo "CLINIC ADDRESS: " . "$row[clinic_add]" . "<br>";
						echo "CLINIC HOURS: " . "$row[clinic_hours]" . "<br>";

					
				?>
				<form class="form-control" method="POST">
					<button type="submit" class="btn btn-default" name="bookmark">Bookmark</button>
				</form>
				<form class="form-control" method="POST">
					<button type="submit" class="btn btn-default" name="send_message">Message</button>
				</form>

				<?php
					if(isset($_POST['bookmark'])){
						$verify=mysqli_query($conn, "SELECT * FROM bookmark WHERE doc_id='$doc_id' AND user_id='$phone_user_id'");
						$num_rows=mysqli_num_rows($verify);
						if($num_rows==1){
							?>
									<script>
										alert("already in your bookmark list");
									</script>
								<?php
						}else{
							
							$bookmark_query=mysqli_query($conn,"INSERT INTO bookmark (doc_id,user_id,fullname,specialization,contact) VALUES ('$doc_id','$phone_user_id','$fullname','$specialization','$contact')");
								if($bookmark_query){
									?>
										<script>
											alert("successfully bookmarked");
										</script>
									<?php
								}else{
										?>
										<script>
											alert("unsuccesfull");
										</script>
									<?php
								}
						}
					}

					if(isset($_POST['send_message'])){
						header("location:send_message.php?id=$doc_id");
					}
				?>
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
</html> 