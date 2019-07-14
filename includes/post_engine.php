<?php

//for asking questoin
if(isset($_POST['submit'])){
        require('database_detail.php');
        $question = $_POST['question'];
        $sql = "INSERT INTO post_table(post) VALUES ('$question')";
        $stmt = $conn->query($sql);
        if($stmt){
            header("location:../index.php");
        }else{
            header("location:../index.php?error=couldntpost");
        }
}