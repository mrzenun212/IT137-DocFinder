<?php
	session_start();
	require 'dbconnect.php';
	
	

	$username=$_POST['username'];
	$password=$_POST['password'];

	

	//$username=mysqli_real_escape_string($conn,$username);
	//$password=mysqli_real_escape_string($conn,$password);

	if (empty($username) || empty($password)) {
		$message="Both fields must not be empty!";
		echo "<script type='text/javascript'>
				alert('$message');
				window.location.href='index.php?error=1';
			</script>";
	}

	$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
	$query=mysqli_query($conn,$sql);
	$numrows = mysqli_num_rows($query);
	
	$doctor = 'doctor';
	$patient = 'patient';
	if($numrows!=0){
				while($row = mysqli_fetch_assoc($query)){
					$dbusername = $row['username'];
					$dbpassword = $row['password'];
					$type = $row['type'];
					$_SESSION['phone-user-id'] = $row['id'];
				}
				$phone_user_id = $_SESSION['phone-user-id'];
				if($dbusername==$username AND $dbpassword==$password){
					if($type==$doctor){
						header('location:doctor.php');
					}elseif($type==$patient){
						header('location:patient.php');
					}
					
				}
	}else{
			?>
			 	<script type='text/javascript'>
					alert('account does not exist');
					window.location.href='doctor_login.php';
				</script>;

			<?php
		}

?>