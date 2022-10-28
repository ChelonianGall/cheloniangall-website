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
            The webchat's new visual is ready! Don't forget to check the <a href = "/faq.php">FAQ</a> if you have any questions!<br/><br/>
            We are actively working on an <a href = "https://greasyfork.org/en">user script</a> to integrate ChelonianGall on CodinGame, where it belongs.<br/><br/>
            The next step will be to save our dear friend <a href = "https://www.codingame.com/blog/markov-chain-automaton2000/">Automaton2000</a> and to give him his right place among us.
        </p>
        <h2>Is it open-source?</h2>
        <p>
            Yes it is! The ChelonianGall project is currently spread over 4 differents repository:
            <ul>
                <li>The server's one. (Private for obvious security reasons.)</li>
                <li><a href="https://github.com/ChelonianGall/cheloniangall-website">The website's one.</a></li>
                <li><a href="https://github.com/ChelonianGall/ChelonianGall-extension-for-CodinGame">The CodinGame extension's one.</a></li>
                <li><a href="https://github.com/ChelonianGall/cheloniangall-automaton2000">The Automaton2000's one.</a></li>
            </ul>
            An overview of the project roadmap is available <a href="https://github.com/orgs/ChelonianGall/projects/1">here</a>.<br/>
        </p>
        <h2>Issues/Request</h2>
        <p>
            If you are encountering any issues or have a feature request, feel free to contact me directly on the chat (@BlaiseEbuth) or to submit an issue (Or even a pull request!) on the corresponding repository.
        </p>
    </div>
</div>
<?php include "elements/pageBottom.php"; ?>