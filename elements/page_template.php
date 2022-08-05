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
    
    include 'elements/init.php'
?>
<!DOCTYPE html>
<html>
<head>
    <title>ChelonianGall</title>
        
    <meta charset = "utf-8"/>
	
    <link
        type = "image/png"
        rel = "icon"
        href = "images/icon.png"
    />
    <link
        type = "text/css"
        rel = "stylesheet"
        href = "styles/global.css"
    />
    <link
        type = "text/css"
        rel = "stylesheet"
        href = "styles/account_bar.css"
    />
    <link
        type = "text/css"
        rel = "stylesheet"
        href = "styles/webchat.css"
    />
    <link
        type = "text/css"
        rel = "stylesheet"
        href = "styles/footer.css"
    />
    <link
        type = "text/css"
        rel = "stylesheet"
        href = "converse/converse.min.css"
        media = "all"
    />

    <script src = "converse/converse.min.js"></script>
</head>
<body>
    <?php include 'elements/account_bar.php'; ?>
    <?php include 'elements/footer.php'; ?>
</body>
<?php include 'elements/chat.php' ?>
</html>