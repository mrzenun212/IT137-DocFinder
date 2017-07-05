<?php
// Start the session
session_start();
require 'dbconnect.php';
?>

<html>
<head>
    <title>DocFinder | Patient Log-In</title>
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
    <div class="main-banner" style="height:65%;" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h1>ABOUT US</h1> 
            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's   standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's   standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><br>
          </div>
          <div class="col-sm-4">
            <h2 align=center>Sign in</h2>
          <form action="verifylogin2.php" method="post">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="username" class="form-control" name="username"  placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label><a href="#signup" class="page-scroll">     Sign Up</a>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>

  <div class ="paragraph" style="height:100%" id="signup">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <form method="POST">
            <div class="form-group">
              <label for="r_username">Username:</label>
              <input type="text" class="form-control" name="r_username"  placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="r_password">Password:</label>
              <input type="password" class="form-control" name="r_password" placeholder="Enter password">
            </div>
            <div class="form-group">
              <label for="r_fullname">Full Name:</label>
              <input type="text" class="form-control" name="r_fullname"  placeholder="Enter full name">
            </div>
            <div class="form-group">
              <label for="r_email">Email:</label>
              <input type="email" class="form-control" name="r_email"  placeholder="Enter email address">
            </div>
            <div class="form-group">
              <label for="r_pnum">Phone number:</label>
              <input type="number" class="form-control" name="r_pnum"  placeholder="Enter phonenumber">
            </div>
            <button type="submit" class="btn btn-default" name="pay-btn">Submit</button>
          </form>
        </div>
        <div class="col-sm-4">
        </div>
      </div>
    </div>
  </div>

  <?php
        if(isset($_POST['pay-btn'])){
          $r_username=$_POST['r_username'];
          $r_password=$_POST['r_password'];
          $r_fullname=$_POST['r_fullname'];
          $r_email=$_POST['r_email'];
          $r_pnum=$_POST['r_pnum'];
          
          $add_user=mysqli_query($conn,"INSERT INTO user(username,password,fullname,type,email,contact) VALUES ('$r_username','$r_password','$r_fullname','patient','$r_email','$r_pnum')");
          if($add_user){
                                ?>
                                <script>
                                    alert("success");
                                </script>
                                <?php
                            }
        }
  ?>




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

</body>
</html> 