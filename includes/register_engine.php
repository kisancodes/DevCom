<?php

    //database 
    $server = "localhost";
    $dbUserName = "root";
    $dbPassword =  "root";
    $dbName = "DevCom_db";

//creating database connection
$conn = mysqli_connect($server,$dbUserName,$dbPassword,$dbName);
    //taking registered values from register form
    $username = $_POST['full_name'];
    $useremail = $_POST['user_email'];
    $user_password = $_POST['user_pw'];
    $confirm_pw = $_POST['c_password'];
    $check = $_POST['check_term'];
 
    $sql = "INSERT INTO users_info(full_name,u_email,password,c_password,check_box) VALUES ('$username','$useremail','$user_password','$confirm_pw','$check');";

    if(mysqli_query($conn,$sql)){
        echo "<h3>Welcome to DevCom</h3>";
    }

if($_POST['check_term'] === "checked")  {
    $to = $useremail;
    $subject = "<h1>Welcome to the world of Developers";
    $message = "Learn, grow and share!!";

    mail($to,$subject,$message);
}

