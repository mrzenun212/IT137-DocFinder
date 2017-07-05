<?php
// Start the session
session_start();
require 'dbconnect.php';
$phone_user_id = $_SESSION['phone-user-id'];
echo $phone_user_id;
$doc_id = $_GET['id'];
//echo $phone_user_id;
?>

<html>
<head>
    <title>DocFinder | Send Message</title>
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
    	<link rel="shortcut icon" type="image/x-icon" href="favicon.jpg"/> <!--favicon icon -->
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
		      <a class="navbar-brand" href="#">Send Message</a>
		    </div>
			<div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="search.php" class="page-scroll">Search</a></li>
			      <li><a href="patient.php" class="page-scroll">Bookmark</a></li>
			      <li><a href="p_messages.php" class="page-scroll">Messages</a></li>
			      <li><a href="logout.php" class="page-scroll">Log Out</a></li>
			    </ul>
			</div>
		  </div>
		</nav>


		<div class="container">
			<div class="row">
				<form method="POST">
					 <div class="form-group">
		              <label for="r_msg">Message:</label>
		               <textarea name="r_msg" rows="5" cols="20" class="form-control" placeholder="Enter message"></textarea>
		            </div>
		            	<button type="submit" class="btn btn-default" name="send">Send</button>
				</form>
			</div>
		</div>

		<?php
		$messages=$_POST['r_msg'];

			if(isset($_POST['send'])){
				$query=mysqli_query($conn,"INSERT INTO messages(doc_id,user_id,messages) VALUES ('$doc_id','$phone_user_id','$messages')");
				if($query){
					?>
						<script>
							window.alert("Message sent!");
						</script>
					<?php
				}else{
					echo mysqli_error();
				}
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
</head>