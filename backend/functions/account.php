<?php
    include "database.php";

    function checkAccount (string $username, string $password)
    {
        $database = getDatabaseConnection();
        
        $query = $database->prepare('SELECT username, password FROM users WHERE username=?;');
        $query->execute([$username]);

        $database = null;

        $user = $query->fetch();
        $result = "bad_username";

        if ($username == $user['username']) {

            if ($password == $user['password']) {

                $result = "valid";
            }
            else {

                $result = "bad_password";
            }
        }

        return $result;
    }

    function createAccount (string $username, string $password)
    {
        $database = getDatabaseConnection();

        $checkUsername = $database->prepare('SELECT username FROM users WHERE username=?;');
        $checkUsername->execute([$username]);

        $user = $checkUsername->fetch();
        $result = "username_already_used";

        if ($user['username'] != $username) {

            $query = $database->prepare('INSERT INTO users (username, password) VALUES (?, ?);');
            $query->execute([$username, $password]);

            $checkUsername->execute([$username]);

            $user = $checkUsername->fetch();

            if ($user['username'] == $username) $result = "registered";
            else $result = "signup_error";
        }

        $database = null;

        return $result;
    }
?>