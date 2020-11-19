<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	
	$connect = mysql_connect("localhost","root","") or die("unable to connect");
	mysql_select_db('logindb');
		
	mysql_query("INSERT into user values('$firstname','$lastname','$email','$password','$dob','$gender')");
	include('welcome.html');
?>