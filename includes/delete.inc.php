<?php
require('index.inc.nav.php');
require('database_detail.php');
$pid = $_GET['id'];
$sql = "DELETE FROM `post_table` WHERE `post_table`.`pid` = $pid";
    $stmt = $conn->query($sql);
    if($stmt){
        echo '<p class="bg-warning" style="margin-top:80px; padding:20px; width:150px;">deleted</p>';
        header("refresh:60; url=../index.php");
    }

?>