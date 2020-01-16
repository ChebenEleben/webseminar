<?php
require_once "config.php";

$name = $_GET["name"];
$age = $_GET["age"];
$username = $_GET["username"];
$password = $_GET["password"];
$confirmpassword = $_GET["confirmpassword"];

if ($password != $confirmpassword) 
	echo "password is not the same"{
		else{
			$query = "INSERT INTO accounts VALUES (0,'".$name."', '".$age."', '".$username."','".$password."','".$confirmpassword."')";
			$mysqli_query = $conn;
		}

	}




?>