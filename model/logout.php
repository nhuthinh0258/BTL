<?php
    session_start();
    if(isset($_SESSION['loginok'])){
        unset($_SESSION['loginok']);
        header("location:../index.php");
    }
?>