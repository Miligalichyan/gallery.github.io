<?php
$mysqli=mysqli_connect('localhost','root','','Gallery');


if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$pass=$_POST['password'];

	$query="INSERT INTO account(email,password) VALUES('$email','$pass')";
	mysqli_query($mysqli,$query);



if(trim($email)==""|| trim($pass)=="")
	echo "Please enter your email and password";
else if(strlen(trim($_POST['password']))<=7)
	echo "Password must have at least 8 characters";
else{
	 //$_POST["password"]=md5($pass);
	// echo  "<h1>Data</h1>";
	// foreach($_POST as $key=>$value)
	// echo "<p>$value</p>";
	
		



	
	header('Location: /Gallery/myphotos.php');
	exit;
	
}




}