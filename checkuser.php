<?php

require_once "config.php";

$username = $_POST["username"];
$password = $_POST["password"];

$queryString = "SELECT * FROM login WHERE username = '".$username."' && password = '"$password"'";
$query = ($conn, $queryString);

?>