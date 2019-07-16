<?php
require('database_detail.php');
if(isset($_POST['submit'])){

            $file = $_FILES['image-name'];
            $fileName = $_FILES['image-name']['name'];
            $fileTmpName = $_FILES['image-name']['tmp_name'];
            $fileSize=$_FILES['image-name']['size'];
            $fileError = $_FILES['image-name']['error'];
            $fileType = $_FILES['image-name']['type'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array("jpg","png","jpeg","pdf","gif");
            if(in_array($fileActualExt,$allowed)){
                    if($fileError === 0){
                        if($fileSize < 700000){
                        $fileNameNew = uniqid('',true).".".$fileActualExt;
                        $fileDestination = '../uploads/'.$fileNameNew;
                        $fileNameForDataBase = 'uploads/'.$fileNameNew;
                        if(move_uploaded_file($fileTmpName,$fileDestination)){
                            $sql = "UPDATE users_info set image_url= '$fileNameForDataBase'";

                            $stmt= $conn->query($sql);
                            if($stmt){
                                header("location:../profile.php");
                            }else{
                                echo "test";
                            }
                        }
                        else{
                                die("test");
                        }
                }
                else{
                        header("location:../profile.php?error=fileTooBig");
                }
        }
        else{
                header("location:../profile.php?error=errorUploadingFile");
        }
}
else{
        header("location:../profile.php?error=filenotassowed");
}
/* $stmt->execute(); */
/* $stmt->close(); */
/* $conn->close(); */
/* header("location:../index.php"); */
}

else {
    header("location:../profile.php");
    exit();
}
?>