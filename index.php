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
    
    session_start();

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
                <a href = "">
                    <img src = "images/title.png" alt = "ChelonianGall logo"/>
                </a>
            </div>
            <div id = "site_menu">
                <!--
                <a href = "/URI" class = "menu_item">
                    ITEM
                </a>
                -->
            </div>
        </div>
        <div id = "home">
            <img id = "turtle" src = "https://i.giphy.com/media/1qB3EwE3c54A/giphy.webp"/>
            <div id = "about">
                <h2>What is ChelonianGall?</h2>
                <p>
                    July 11, 2022, <a href = "https://www.codingame.com">CodinGame</a> discontinued their webchat after years of good services.<br/><br/>
                    <a href = "https://cheloniangall.com/">ChelonianGall</a> is here to host that community they don't want.<br/><br/>
                    Here you will find a chat server reachable with the <a href = "https://xmpp.org/software/clients/">XMPP client</a> of your choice as well as with the dedicated webchat.
                </p>
                <h2>What's next?</h2>
                <p>
                    Once the webchat's new visual ready, the next step will be an <a href = "https://greasyfork.org/en">user script</a> to integrate ChelonianGall on CodinGame, where it belongs.<br/><br/>
                    At the same time, we are actively working to save our dear friend <a href = "https://www.codingame.com/blog/markov-chain-automaton2000/">Automaton2000</a> and to give him his right place among us.
                </p>
                <h2>Is it open-source?</h2>
                <p>
                    Yes it is! The ChelonianGall project is currently spread over 3 differents repository:
                    <ul>
                        <li>The server's one. (Private for obvious security reasons.)</li>
                        <li><a href="https://github.com/BlaiseEbuth/cheloniangall-website">The website's one.</a></li>
                        <li><a href="https://github.com/BlaiseEbuth/cheloniangall-automaton2000">The Automaton2000's one.</a></li>
                    </ul>
                    An overview of the project roadmap is available <a href="https://github.com/users/BlaiseEbuth/projects/1">here</a>.<br/>
                </p>
                <h2>Issues/Request</h2>
                <p>
                    If you are encountering any issues or have a feature request, feel free to contact me directly on the chat (@BlaiseEbuth) or to submit an issue (Or even a pull request!) on the corresponding repository.
                </p>
            </div>
        </div>
        <div id = "footer">
            <p>
                ChelonianGall&copy; 2022, all rights reserved.
            </p>
        </div>
    </div>
    <div id = "right-column">
        <?php if ($loggedIn) {?>
            <converse-root></converse-root>
        <?php } else { ?>
            <div id = "account_form">
                <?php if ($_SESSION['account_form_type'] == 'log_in') { ?>
                    <form id = "log_in_form" action = "backend/login.php" method = "post">
                        <input type = "text" id = "log_in_username" name = "username" placeholder = "USERNAME"
                            <?php
                                if ($_SESSION['login'] == 'bad_username') {

                                    echo('class = "bad_username"');
                                }

                                if (isset($_SESSION['username'])) {

                                    echo("value = \"{$_SESSION['username']}\"");
                                }
                            ?>
                            minlength = "1" maxlength = "30" spellcheck = "false" required/>
                        <input type = "password" id = "log_in_password" name = "password" placeholder = "PASSWORD"
                            <?php
                                if ($_SESSION['login'] == 'bad_password') {

                                    echo('class = "bad_password');
                                }
                            ?>
                            minlength = "8" maxlength = "50" spellcheck = "false" required/>
                        <input type = "submit" value = "LOG IN"/>
                    </form>
                    <form id = "switch_to_sign_up" action = "" method = "post">
                        <input type = "hidden" name = "account_form_type" value = "sign_up" />
                        <label>No account yet?</label>
                        <button type = "submit">SIGN UP</button>
                    </form>
                <?php
                    }
                    else {
                ?>
                    <form id="sign_up_form" action="backend/signup.php" method="post">
                        <input  type = "text" name = "username" placeholder = "USERNAME"
                            <?php
                                if ($_SESSION['signup'] == 'username_already_used') {

                                    echo('class = "username_already_used"');
                                }

                                if (isset($_SESSION['username'])) {

                                    echo("value = \"{$_SESSION['username']}\"");
                                }
                            ?>
                            minlength = "1" maxlength = "30" spellcheck = "false"  pattern = "[a-zA-Z0-9_]{1,30}" title = "From 1 to 30 characters among &quot;0-9a-z_&quot;" required/>
                        <input type = "password" name = "password" placeholder = "PASSWORD"
                            <?php
                                if ($_SESSION['signup'] == 'signup_error') {

                                    echo('class = "signup_error');
                                }
                            ?>
                            minlength = "8" maxlength = "50" spellcheck = "false" required/>
                        <input type = "submit" value = "SIGN UP"/>
                    </form>
                    <form id = "switch_to_log_in" action = "" method = "post">
                        <input type = "hidden" name = "account_form_type" value = "log_in"/>
                        <label>Already have an account?</label>
                        <button id = "switch_to_log_in">LOG IN</button>
                    </form>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</body>
<?php if ($loggedIn) { ?>
    <script src = "scripts/cheloniangall.js"></script>
<?php } ?>
</html>