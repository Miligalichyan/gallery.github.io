<?php
 session_start();
 
 $name=htmlspecialchars(trim($_POST["name"]));
 $last_name=htmlspecialchars(trim($_POST["lastname"]));
 $email=htmlspecialchars(trim($_POST["email"]));
 $password=htmlspecialchars(trim($_POST["password"]));
 
 
 $_SESSION["name"]=$name;
 $_SESSION["lastname"]=$last_name;
 $_SESSION["email"]=$email;
 $_SESSION["password"]=$password;