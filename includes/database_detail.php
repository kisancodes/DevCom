<?php
$server = "localhost";
$dbUserName = "root";
$dbPassword =  "password";
$dbName = "DevCom_db";

//creating database connection

$conn = new mysqli($server,$dbUserName,$dbPassword,$dbName);
//checking the connection
//
if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
}
