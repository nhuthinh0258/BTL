<?php
// Include the database configuration file
require '../model/dbconfig.php';
$statusMsg = '';

// File upload path
$targetDir = "../upload/";
$fileName = basename($_FILES["myfile"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submitup"]) && !empty($_FILES["myfile"]["name"])){
    // Allow certain file formats
    if(file_exists($targetFilePath)){
        echo '<script>alert("Tệp đã tồn tại, mời thử lại")</script>';
    }
    else{
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $sql="INSERT into db_media (ten_file, ngay_up) VALUES ('".$fileName."', NOW())";
                $insert = mysqli_query($conn,$sql);
                if($insert){
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                    header("location:../views/feed.php");
                }else{
                    $statusMsg = "File upload failed, please try again.";
                } 
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>