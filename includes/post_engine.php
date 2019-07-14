<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['file']['name']);
$uploadOk = 1;
$image_file_type = strtolower(pathinfo($target_file,FILEINFO_EXTENSION));

if(isset($_POST['submit'])){
        require('database_detail.php');
        $check = getimagesize($_FILES['name']['temp_name']);
        if($check !== false){
            $uploadOk = 1;
        }else{
            $uploadOk = 0;
        }
        // $question = $_POST['question'];
        // $file = $_FILES['file'];
        // $fileName = $_FILES['file']['name'];

        $sql = "INSERT INTO post_table(post,cover_image) VALUES ('$question','image-file1')";
        $stmt = $conn->query($sql);
        if($stmt){
            header("location:../index.php");
        }else{
            header("location:../index.php?error=couldntpost");
        }
}