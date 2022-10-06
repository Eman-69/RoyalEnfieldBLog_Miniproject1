<?php
	$hname="localhost";
	$uname="Eman";
	$password="password";
	$db="royalenfield";
	$conn=mysqli_connect($hname,$uname,$password,$db);
	if (!$conn) {
		echo "Connection Failed!";
	}
?>