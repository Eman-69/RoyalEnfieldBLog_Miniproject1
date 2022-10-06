<?php
	$hname="http://sql6.freesqldatabase.com/";
	$uname="sql6524680";
	$password="3pNvdyPbAQ";
	$db="sql6524680";
	$conn=mysqli_connect($hname,$uname,$password,$db);
	if (!$conn) {
		echo "Connection Failed!";
	}
?>