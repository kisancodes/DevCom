<?php

    $username = $_POST['full_name'];
    $useremail = $_POST['user_email'];
    $user_password = $_POST['user_pw'];
    $confirm_pw = $_POST['c_password'];
    $check = $_POST['check_term'];

    //database credintial
    require 'includes/database_detail.php';

    $sql = "INSERT INTO users_info(uid,full_name,u_email,password,c_password,check_box) values('$username','$useremail','$user_password','$confirm_pw','$check');";


    $result = $conn->query($sql);

    if($result === TRUE){
        echo "Registered successfully";
    }

