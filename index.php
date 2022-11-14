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
            July 11, 2022, <a href = "https://www.codingame.com">CodinGame</a> discontinued their webchat after years of good services. <a href = "https://cheloniangall.com/">ChelonianGall</a> is here to replace it!<br/><br/>
            Here you will find a chat server reachable with the <a href = "https://xmpp.org/software/clients/">XMPP client</a> of your choice as well as with the dedicated webchat, but also an <a href="https://greasyfork.org/en/scripts/453839-cheloniangall">user script</a> to integrate this webchat on CodinGame!<br/><br/>
            If you do not know how to use all this stuff, do not hesitate to check the <a href="/faq.php">FAQ</a>.
        </p>
        <h2>What's next?</h2>
        <p>
            While continuing to improve the webchat and its integration on CodinGame, the next step will be to save our dear friend <a href = "https://www.codingame.com/blog/markov-chain-automaton2000/">Automaton2000</a> and to give him his right place among us.
        </p>
        <h2>Can I contribute?</h2>
        <p>
            Yes you can! The ChelonianGall project is currently spread over 4 differents repository:
            <ul>
                <li>The server configuration's one. (Private for security reasons.)</li>
                <li><a href="https://github.com/ChelonianGall/cheloniangall-website">The website's one.</a></li>
                <li><a href="https://github.com/ChelonianGall/ChelonianGall-extension-for-CodinGame">The user script's one.</a></li>
                <li><a href="https://github.com/ChelonianGall/cheloniangall-automaton2000">The Automaton2000's one.</a></li>
            </ul>
            An overview of the project roadmap is available <a href="https://github.com/orgs/ChelonianGall/projects/1">here</a>.<br/>
        </p>
        <h2>Issues and Request</h2>
        <p>
            If you are encountering any issues or have a feature request, feel free to contact me directly on the chat (@BlaiseEbuth), to [email address to come] or to submit an issue on the corresponding repository.
        </p>
    </div>
</div>
<?php include "elements/pageBottom.php"; ?>