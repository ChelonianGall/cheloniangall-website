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

    include 'functions/account.php';
    include 'functions/redirect.php';

    ini_set('session.cookie_samesite', 'None');
    ini_set('session.cookie_secure', 'true');
    session_start();

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["signup"] = createAccount($_POST["username"], $_POST["password"]);

    if ($_SESSION["signup"] == 'registered') $_SESSION['account_form_type'] = 'log_in';
    else $_SESSION['account_form_type'] = 'sign_up';

    redirect('/');
?>