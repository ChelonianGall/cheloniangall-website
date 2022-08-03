<?php
    session_start();

    if (isset($_SESSION['login']) && $_SESSION['login'] == 'valid') {

        $credentials = Array (
            
            "jid" => $_SESSION['username']."@cheloniangall.com",
            "password" => $_SESSION['password']
        );

        header('Content-Type: application/json');

        echo(json_encode($credentials));
    }
?>