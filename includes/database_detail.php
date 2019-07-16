<?php
$server = "localhost";
$dbUserName = "root";
$dbPassword =  "root";
$dbName = "DevCom_db";

//creating database connection
$conn = new mysqli($server,$dbUserName,$dbPassword,$dbName);

if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
}
?>
