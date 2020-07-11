<?php ob_start();
	$con=mysqli_connect("localhost","root","","dbrealestate","3306") or die(mysqli_error($con));
	session_start();
	ob_end_flush();
?>