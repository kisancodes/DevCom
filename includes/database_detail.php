<?php
$server = "localhost";
$dbUserName = "root";
$dbPassword =  "root";
$dbName = "DevCom_db";

//creating database connection

$conn = mysqli_connect($server,$dbUserName,$dbPassword,$dbName);

//checking the connection