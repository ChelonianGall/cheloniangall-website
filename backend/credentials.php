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

    include 'functions/session.php';

    startSession();

    if (isset($_SESSION['login']) && $_SESSION['login'] == 'valid') {

        $credentials = Array (
            
            "jid" => $_SESSION['username']."@cheloniangall.com",
            "password" => $_SESSION['password']
        );

        header('Content-Type: application/json');

        echo(json_encode($credentials));
    }
?>