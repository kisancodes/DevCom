<?php

include 'includes/database_detail.php';

$question = $_POST['question'];

$sql = "INSERT INTO post_table(pid,post,image) VALUES ($question,'image-file1')";

if(mysqli_query($conn,$sql)){
    echo "good";
}else{
    echo "error";
}
mysqli_close($conn);