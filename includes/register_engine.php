<?php
require('database_detail.php');

//taking registered values from register form
$username = $_POST['full_name'];
$useremail = $_POST['user_email'];
$user_password = $_POST['user_pw'];
$confirm_pw = $_POST['c_password'];
$check = $_POST['check_term'];

if(empty($username) || empty($useremail) || empty($user_password) || empty($confirm_pw)){
		header("location:../register.php?error=emptyFields&name=".$username."&email=".$useremail);
		exit();
}

// elseif(!filter_var($useremail,FILTER_VALIDATE_EMAIL)){
// 	header("location: ../register.php?error=invalidmail&uid=".$username);
// 	exit();
// }
elseif($user_password != $confirm_pw){
		header("location:../register.php?error=passwordDonotMatched");
		exit();
}
// elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
// 	header("locatoin: ../register.php?error=invaliduid&username" . $useremail);
// 	exit();
// }

else{
		$hashPassword = password_hash($user_password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users_info(full_name,u_email,password,check_box) VALUES ('$username','$useremail','$hashPassword','$check')";

  
		$stmt = $conn->query($sql);
		if($stmt){
			//redirect to login page
				header("location:../login.php");
        }else{
            header("location:../register.php?error=cannotinsert");
        }

}
//sending mail after subscribing news letter
if($check == true){
	$to = $useremail;
	$subject = "<h1>Registration has been successfull</h1>";
	$msg = "<p>Hi '.$username.',<br>You are now part of our community</p>";

	mail($to,$subject,$msg);
}
 