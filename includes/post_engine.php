<?php

require('database_detail.php');

$question = $_POST['question'];

$sql = "INSERT INTO post_table(pid,post,cover_image) VALUES ('$question','image-file1')";
die($sql);


$stmt = $conn->query($sql);
if($stmt){
    header("location:../index.php");
}else{
    header("location:../index.php?error=couldntpost");
}