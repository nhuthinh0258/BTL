<?php
require("../template/header.php");
?>
<head>
    <link rel="stylesheet" href="../css/error-login.css">
    <link rel="stylesheet" href="../css/register.css">
</head>

    <main>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header text-center">
                <h5>Account validation</h5>
                You'll use your phone number
                to sign in to your account
                </div>
                <div class="card-body">
                    <form action="../model/process-dangky.php" method="post">
                        <div class="form-group pt-3">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="txtemail" class="form-control" id="email" aria-describedby="emailHelp"required="">
                        </div>
                        <div class="form-group pt-3">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="txtsodienthoai" class="form-control" id="phone" aria-describedby="emailHelp"required="">
                        </div>
                        <div class="form-group pt-3">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="txtpass" class="form-control" id="pass" aria-describedby="emailHelp"required="">
                        </div>
                        <button class="btn mt-3" id="register" type="submit" name="btnregister">Registration</button>
                    </form>
                </div>
            </div>
        </div>
    </main>




<?php
require("../template/footer.php");
?>