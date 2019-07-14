<?php

if(isset($_POST['tag-submit'])){
    require ('database_detail.php');
    $tag = $_POST['tags'];
    $sql = "INSERT INTO tags_table (tags) VALUES ('$tag')";
    $stmt = $conn->query($sql);
    if($stmt){
        header("location: ../index.php");
    }
}

?>