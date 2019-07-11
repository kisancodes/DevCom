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
elseif($user_password != $confirm_pw){
		header("location:../register.php?error=passwordNotEqual");
		exit();
}
else{
		$hashPassword = password_hash($user_password,PASSWORD_DEFAULT);
		$sql = "INSERT INTO users_info(u_email,password,checked,full_name) VALUES ('$useremail','$hashPassword','$check','$username')";
		$stmt = $conn->query($sql);
		if($stmt){
				header("location:../login.php");
		}

}



//send news letther
if($_POST['check_term'] == "checked")  {
		$to = $useremail;
		$subject = "<h1>Welcome to the world of Developers";
		$message = "Learn, grow and share!!";

		mail($to,$subject,$message);
}

