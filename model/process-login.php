<?php
session_start();

if(isset($_POST['btnsignin'])){
    $user=$_POST['txtdienthoai'];
    $pass=$_POST['txtpass'];
    

// Bước 01: Kết nối Database Server
    include "../model/dbconfig.php";
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM db_userdangnhap WHERE email = '$user' OR sodienthoai='$user'";
    $sql2="SELECT trangthai FROM db_userdangnhap WHERE email = '$user' OR sodienthoai='$user'";


    $result = mysqli_query($conn,$sql);
    $result2= mysqli_query($conn,$sql2);

    if(mysqli_num_rows($result) > 0){
        $row= mysqli_fetch_assoc($result);
        $pass_hash=$row['matkhau'];
        if(password_verify($pass,$pass_hash)){
            $_SESSION['loginok']=$user;
            header("location: ../views/feed.php");
        }
        else{
            header("location: ../views/error-login.php"); 
        }

    }else{
        header("location: ../views/error-login.php"); 
    }

// Bước 03: Đóng kết nối
    mysqli_close($conn);
}
else{
    header("location:index.php");
}

    
?>