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
    
    include "elements/pageTop.php";
?>
<div id = "faq">
    <h1>Frequently Asked Questions</h1>
    <details class = "question-category">
        <summary class = "category-name">Account</summary>
        <div class = "questions-list">
            <details class = "question">
                <summary class = "statement">How to change my ChelonianGall password?</summary>
                <div class = "answer">
                    <p>There is currently no way for an user to change his password, this feature will be added in the future.</p>
                    <p>So choose your password carefully and don't forget it!</p>
                </div>
            </details>
            <details class = "question">
                <summary class = "statement">How to create a ChelonianGall account?</summary>
                <div class = "answer">
                    <p>In the right column of the website click on the "SIGN UP" link under the log in form.</p>
                    <img src = "images/faq-signup-1.png"/>
                    <p>Now fill the sign up form with a nickname and a password fulfilling the following requirements:</p>
                    <ul>
                        <li>Nickname: From 1 to 30 characters, with only lowercase letters (a-z), digits (0-9) and underscores (_).</li>
                        <li>Password: From 8 to 50 characters.</li>
                    </ul>
                    <p>Then click on the "SIGN UP" button</p>
                    <img src = "images/faq-signup-2.png"/>
                    <p>Note that if the chosen nickname is already used, you will be sent back to the sign up form with the nickname field bordered with red.</p>
                    <img src = "images/faq-signup-3.png"/>
                    <p>Otherwhise you will be redirected to the login form. Welcome on ChelonianGall!</p>
                    <img src = "images/faq-signup-4.png"/>
                </div>
            </details>
            <details class = "question">
                <summary class = "statement">How to delete my ChelonianGall account?</summary>
                <div class = "answer">
                    <p>There is currently no way for an user to delete his account, this feature will be added in the future.</p>
                    <p>But, if you are sure you will never need this account anymore, and you want it to be destroyed as soon as possible, just ask a moderator on the chat.</p>
                </div>
            </details>
            <details class = "question">
                <summary class = "statement">How to retrieve my ChelonianGall password?</summary>
                <div class = "answer">
                    <p>One of the requirement for ChelonianGall was to be as simple and non-binding to join as possible.</p>
                    <p>So we don't ask for e-mail addresses, phone numbers, or whatever, only a nickname and a password.</p>
                    <p>The counterpart is that we have no way to check the identity of an user claiming he has lost his password.</p>
                    <p>The better would be to not lose your password. But if it happens don't hesitate to contact <i>[contact address not yet existing]</i> and we will see what can be done.</p>
                </div>
            </details>
        </div>
    </details>
    <details class = "question-category">
        <summary class = "category-name">Webchat</summary>
        <div class = "questions-list">
            <details class = "question">
                <summary class = "statement">How to bookmark a groupchat?</summary>
                <div class = "answer">
                    <p>To bookmark a groupchat you need to join it first. See the "How to join a groupchat?" entry in this FAQ to see how to do.</p>
                    <p>Open the webchat menu and click on the star next to the groupchat you want to bookmark.</p>
                    <img src = "images/faq-bookmark-1.png"/>
                    <p>The bookmark window will show up. Change the settings as you wish then click the "SAVE" button.</p>
                    <img src = "images/faq-bookmark-2.png"/>
                    <p>Now if you leave this groupchat you will be able to find it back in the "BOOKMARKS" section of the menu.</p>
                    <img src = "images/faq-bookmark-3.png"/>
                </div>
            </details>
            <details class = "question">
                <summary class = "statement">How to configure my chat profile?</summary>
                <div class = "answer">
                    <p>Open the webchat menu. If you don't know where to find it, see the "How to open the webchat menu?" entry of this FAQ.</p>
                    <p>To access to the profile configuration cick on your profile picture.</p>
                    <img src = "images/faq-profile-1.png"/>
                    <p>In this window you can chose a profile picture and set up a nickname that will be used in every groupchat you join.</p>
                    <img src = "images/faq-profile-2.png"/>
                    <p>Once done click "SAVE AND CLOSE".</p>
                </div>
            </details>
            <details class = "question">
                <summary class = "statement">How to join a groupchat?</summary>
                <div class = "answer">
                    <p>Open the webchat menu. If you don't know where to find it, see the "How to open the webchat menu?" entry of this FAQ.</p>
                    <p>To join a groupchat click on the list icon next to the 'GROUPCHAT' section.</p>
                    <img src = "images/faq-joingroupchat-1.png"/>
                    <p>A window listing the available groupchats will show up. Click on the one you want to join.</p>
                    <img src = "images/faq-joingroupchat-2.png"/>
                    <p>It will now appear in the "OPEN GROUPCHATS" list.</p>
                    <img src = "images/faq-joingroupchat-3.png"/>
                    <p>You can now exit the menu and chat!</p>
                </div>
            </details>
            <details class = "question">
                <summary class = "statement">How to logout from the webchat?</summary>
                <div class = "answer">
                    <p>Open the webchat menu. If you don't know where to find it, see the "How to open the webchat menu?" entry of this FAQ.</p>
                    <p>Now click the log out button next to your nickname.</p>
                    <img src = "images/faq-logout-1.png"/>
                </div>
            </details>
            <details class = "question">
                <summary class = "statement">How to open the webchat menu?</summary>
                <div class = "answer">
                    <p>Once connected you will see one of these buttons (It is actually the same one with different texts depending on the context) on the top of the right column of the website.</p>
                    <img src = "images/faq-menu-1.png"/>
                    <img src = "images/faq-menu-2.png"/>
                    <p>By clicking it you will display the webchat menu.</p>
                    <img src = "images/faq-menu-3.png"/>
                    <p>To close it, use the top button.</p>
                    <img src = "images/faq-menu-4.png"/>
                </div>
            </details>
            <details class = "question">
                <summary class = "statement">How to set my status?</summary>
                <div class = "answer">
                    <p>Open the webchat menu. If you don't know where to find it, see the "How to open the webchat menu?" entry of this FAQ.</p>
                    <p>To set a new presence status click on your current one.</p>
                    <img src = "images/faq-status-1.png"/>
                    <p>In the window that shows up, choose a new presence status and, optionaly, a customized message.</p>
                    <img src = "images/faq-status-2.png"/>
                    <p>Once done click the "SAVE" button.</p>
                </div>
            </details>
            <details class = "question">
                <summary class = "statement">How to start a private chat with another user?</summary>
                <div class = "answer">
                    <p>Open the webchat menu. If you don't know where to find it, see the "How to open the webchat menu?" entry of this FAQ.</p>
                    <p>First you need to find the user you want to contact in the members list.</p>
                    <img src = "images/faq-private-1.png"/>
                    <p>To do so, you can use the filters and search bar on the top.</p>
                    <img src = "images/faq-private-2.png"/>
                    <p>Or manualy browse the list.</p>
                    <img src = "images/faq-private-3.png"/>
                    <p>Once the user found, simply click on it.</p>
                    <img src = "images/faq-private-4.png"/>
                    <p>You can now close the menu and chat!</p>
                </div>
            </details>
        </div>
    </details>
</div>
<?php include "elements/pageBottom.php"; ?>