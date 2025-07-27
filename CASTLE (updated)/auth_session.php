<?php
    session_start();
    if(!isset($_SESSION["user_Id"])) {
        header("Location: Login_Form.php");
        exit();
    }
?>