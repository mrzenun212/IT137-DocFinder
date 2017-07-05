<?php
	session_start();

	
	unset($_SESSION['phone-user-id']);
	header("location:../index.php");

?>