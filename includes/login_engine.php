<?php

if(isset($_POST['login'])){
	require('database_detail.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
		//checking empty value
		if(empty($username) || empty($password)){
				header("location:../login.php?error=emptyFields");
				exit();
		}
		else{
			$sql = "select * from users_info where u_email='$username'";
			$stmt = $conn->query($sql);
			if($stmt){
				if($stmt->num_rows>0)
				{
					$row = $stmt->fetch_assoc();
					if(password_verify($password,$row['password'])){
						session_start();

						$_SESSION['username']=$username;
						header('location:../index.php');
					}
					else{
						header("location:../login.php?error=passwordwrong");
					}
				}
				else{
					header("location:../login.php?error=nosuchuser");
				}
			}
			else{
				header("location:../login.php?error=executionerror");
			}
		}
}
else{
		header("location:../login.php");
}











?>
