<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'nss';
$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
	die('could not able to connect to database'.$conn->connect_error);
	// code...
}
?>