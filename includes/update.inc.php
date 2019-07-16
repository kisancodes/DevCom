<?php
if(isset($_GET['id'])){
		require("database_detail.php");
		$id = (int)$_GET['id'];
		$question = $_POST['question'];
		if(empty($question)){
				header("location:../index.php?error=editYourQuestion");
				exit();
		}
		$sql = "UPDATE post_table SET post = ? WHERE pid =?";
		if($stmt = $conn->prepare($sql)){
				$stmt->bind_param("si", $ques, $pid);
				$ques = $question;
				$pid = $id;
				if($stmt->execute()){
						echo "updated";
						header("refresh: 1; url=../index.php?updateSuccess");
				}
		}else{
				echo "not test";
		}
}
?>
