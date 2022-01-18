<?php
session_start();

if (isset($_POST['regis'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost', 'root', '', 'vk.com');
    if (!$conn) {
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO `user`"
    $sql = "INSERT INTO `user` (`first_name`, `last_name`, `email`, `username`, `password`) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['loginok'] = $username;
        header("location: ../views/feed.php");
    } else {
        header("location: ../views/error-login.php");
    }
    // Bước 03: Đóng kết nối
    mysqli_close($conn);
    // Bước 04: Gửi email xác nhận
    $from = 'vkcom@contact.info';
    $to = $email;
    $subject = 'Confirm registration';
    $message = 'Please confirm the registration before you could post anything. Thank you for your interesting!';
    $headers = 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
} else {
    header("location:../index.php");
}
