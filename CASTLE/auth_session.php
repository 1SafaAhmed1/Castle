<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: Login_Form.php");
        exit();
    }
?>