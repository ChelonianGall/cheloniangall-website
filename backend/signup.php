<?php
    include 'functions/account.php';
    include 'functions/redirect.php';

    session_start();

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["signup"] = createAccount($_POST["username"], $_POST["password"]);

    if ($_SESSION["signup"] == 'registered') $_SESSION['account_form_type'] = 'log_in';
    else $_SESSION['account_form_type'] = 'sign_up';

    redirect('https://cheloniangall.com');
?>