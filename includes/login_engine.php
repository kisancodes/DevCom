<?php
require('database_detail.php');
if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(empty($username) || empty($password)){
				header("location:../login.php?error=emptyFields&email=".$email);
		}
		else{
				$sql = "SELECT * from users_info WHERE u_email='$username' OR full_name='$username'";
				$stmt = $conn->query($sql);
				if(!$stmt){
						header("location:../login.php?error=queryError");
						exit();
				}
				else{
						if($stmt->num_rows>0){
								$result = $stmt->fetch_assoc();
								$pwdCheck = password_verify($password, $result['password']);
								if(!$pwdCheck){
										header("location:../login.php?error=wrongPassword");
										exit();
								}
								else if($pwdCheck){
										$_SESSION['username'] = $username;
										$_SESSION['password'] = $result['password'];
										header("location:../index.php");
								}
						}
				}
		}
}
else{
		header("location:../login.php");
}
?>
