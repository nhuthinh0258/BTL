<?php
session_start();

if (isset($_POST['btnsignin'])) {
    $user = $_POST['txtdienthoai'];
    $pass = $_POST['txtpass'];
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost', 'root', '', 'vk.com');
    if (!$conn) {
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM `user` WHERE (`username` = '$user' OR `phone`='$user') AND `password`='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['loginok'] = $user;
        header("location: ../views/feed.php");
    } else {
        header("location: ../views/error-login.php");
    }
    // Bước 03: Đóng kết nối
    mysqli_close($conn);
} else {
    header("location:../index.php");
}
