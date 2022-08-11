<?php
    /*
    cheloniangall.com is a website created to host a webchat intended to replace the CodinGame's deleted one.
    Copyright (C) 2022 BlaiseEbuth

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
    */

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