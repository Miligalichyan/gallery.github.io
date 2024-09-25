<?php

$mysqli=mysqli_connect('localhost','root','','Gallery');

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$pass=$_POST['password'];

	$query="INSERT INTO users(name,lastname,email,password) VALUES('$name','$lastname','$email','password')";
	mysqli_query($mysqli,$query);

header('location:myphotos.php');
}