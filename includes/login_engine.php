<?php

if(isset($_POST['login'])){
	require('database_detail.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
		$userPwd  = password_hash($password,PASSWORD_DEFAULT);
		$demo = '$2y$10$mE9W3TScDPGpWcJeeNLzce/H5/LbqoRLwQfGrvnoWex38jRZ8WWqW';
		$demoid = 'anilrai@gmail.com';
		//checking empty value
		if(empty($username) || empty($password)){
				header("location:../login.php?error=emptyFields");
				exit();
		}
		else{
				$sql = "SELECT * FROM users_info WHERE u_email= '$username'";
				$stmt = $conn->query($sql);
				
				if($stmt->num_rows == 1){
						// header("location:../login.php?error=prepareError");
						header("refresh = 1; location: ../index.php");
						exit();
				}
				else{
					echo "login failed";
					echo $username;
					echo $password;
					echo $userPwd;
					echo $sql;
				}
		}
}
else{
		header("location:../login.php");
}











?>
