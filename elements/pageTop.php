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

    include 'backend/functions/session.php';

    startSession();

    $loggedIn = isset($_SESSION['login']) && $_SESSION['login'] == 'valid';

    if (isset($_POST['account_form_type'])) {
		
		$_SESSION['account_form_type'] = $_POST['account_form_type'];
	}
	else if (!isset($_SESSION['account_form_type'])) {

		$_SESSION['account_form_type'] = 'log_in';
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ChelonianGall</title>
    <meta charset = "utf-8"/>
	<link type = "image/png" rel = "icon" href = "images/icon.png"/>
	<link type = "text/css" rel = "stylesheet" href = "styles/cheloniangall.css"/>
    <script src = "dist/converse.min.js"></script>
</head>
<body>
    <div id = "left-column">
        <div id = "header">
            <div id = "site_title">
                <a href = "/">
                    <img src = "images/title.png" alt = "ChelonianGall logo"/>
                </a>
            </div>
            <div id = "site_menu">
                <a href = "/faq.php" class = "menu_item">
                    FAQ
                </a>
            </div>
        </div>