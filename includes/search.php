<?php
require('database_detail.php');

$tag = $_POST['tag-name'];

// die($tag);
if(isset($_POST['search-btn'])){
    
    // die($tag);
    $sql = "SELECT * FROM tags_table where tags = '$tag'";
    // die($sql);
    $stmt = $conn->query($sql);
    if($stmt->num_rows>0){
        while($row = $stmt->fetch_assoc()){
            echo '<h3>Result found</h3>:<br>'.$row['tags'];
        }
    }
    else{
        echo "No such tags. Add+  first";
    }
}