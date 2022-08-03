<?php
    include 'functions/redirect.php';

    session_start();

    $_SESSION = array();

    session_destroy();

    redirect('https://cheloniangall.com');
?>