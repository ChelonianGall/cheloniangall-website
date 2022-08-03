<?php
    include 'functions/account.php';
    include 'functions/redirect.php';

    session_start();

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["login"] = checkAccount($_POST["username"], $_POST["password"]);
        
    redirect('https://cheloniangall.com');
?>