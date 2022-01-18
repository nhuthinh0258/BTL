<?php
require("../template/header.php");
?>
<head>
    <link rel="stylesheet" href="../css/error-login.css">
</head>

    <?php
    if($_GET['key'] && $_GET['token'])
    {
        require "../model/dbconfig.php";
        $email = $_GET['key'];
        $token = $_GET['token'];

        $sql="SELECT * FROM db_userdangnhap WHERE email_check ='".$token."' and email='".$email."'";
        $query = mysqli_query($conn,$sql);
        
        $d = date('Y-m-d H:i:s');
        if (mysqli_num_rows($query) > 0) {
        $row= mysqli_fetch_array($query);
        if($row['email_check_date'] == NULL){
            $sql2="UPDATE db_userdangnhap set email_check_date ='$d',trangthai=1 WHERE email='$email'";
        mysqli_query($conn,$sql2);
        $msg = "Congratulations! Your email has been verified.";
        }else{
        $msg = "You have already verified your account with us";
        }
        } else {
        $msg = "This email has been not registered with us";
        }
    }
    else
    {
    $msg = "Danger! Your something goes to wrong.";
    }
    ?>
    <main>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header text-center">
                <h5>Account validation</h5>
                You'll use your phone number
                to sign in to your account
                </div>
                <div class="card-body">
                    <p>
                        <?php echo $msg; ?>
                    </p>
                </div>
            </div>
        </div>
    </main>

<?php
require("../template/footer.php");
?>