
<?php
if(isset($_POST['btnregister']) && $_POST['txtemail'])
{
        include "../model/dbconfig.php";
        $result = mysqli_query($conn,"SELECT * FROM db_userdangnhap WHERE email='" . $_POST['txtemail'] . "'");
        if(mysqli_num_rows($result) <= 0)
        {
            $token = md5($_POST['txtemail']).rand(10,9999);

            $email =$_POST['txtemail'];
            $phone =$_POST['txtsodienthoai'];
            $pass=password_hash($_POST['txtpass'],PASSWORD_DEFAULT);

            $sql="INSERT INTO db_userdangnhap(email,sodienthoai, email_check ,matkhau) VALUES('$email','$phone','$token','$pass')";
            mysqli_query($conn,$sql);
            $link = "<a href='http://localhost/BTL/controller/activeemail.php?key=".$email."&token=".$token."'>Click and Verify Email</a>";

            include "../controller/sendemail.php";
            if(sendemail($email,$link)){
                echo "<script>alert('Please check email');
                window.location.href='../index.php';
                </script>";
            }
            else{
                echo "Sorry, somethings wrong";
            }
        }
        else
        {
        echo "<script>alert('You have already registered with us. Check Your email box and verify email.');
                window.location.href='../views/register.php';
            </script>";

        }
}

?>