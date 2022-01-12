<?php
if(isset($_POST['btnsignin'])){
    $user=$_POST['txtdienthoai'];
    $pass=$_POST['txtpass'];
    

// Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','vk.com');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM db_userdangnhap WHERE (email = '$user' OR sodienthoai='$user') AND matkhau='$pass'";


    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        header("location: ../views/home.php");

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