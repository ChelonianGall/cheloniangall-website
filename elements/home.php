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
?>

<div id = "home">
    <img id = "turtle" src="https://i.giphy.com/media/1qB3EwE3c54A/giphy.webp"/>
    <div id = "about">
        <h2>What is ChelonianGall?</h2>
        <p>July 11, 2022, <a href="https://codingame.com/">CodinGame</a> discontinued their webchat after years of good services, arguing it was complicated to maintain and moderate. Which was true. But instead of reworking/remade it, they decided to delete it completely and to rely only on their Discord server. A perfect trade from their point of view. But sadly they missed the point.</p>
        <p>As a mater of fact, the Discord solution has some huge problems:</p>
        <ul>
            <li>It's not integrated on the site. Which is problematic for both visibility (for new users) and UX.</li>
            <li>Some users do not want to create a Discord account, mainly for privacy reasons.</li>
            <li>A lot of users used to connect to the chat from school/work and Discord is blocked in lot of these places.</li>
            <li>In the "Clash of Code" mode a new chat room was created for each game, which Discord can not handle.</li>
        </ul>
        <p>ChelonianGall takes the form of a <a href="https://xmpp.org/">XMPP</a> server coupled with a dedicated webchat. The project goal is to offer a community driven alternative to the CodinGame's Discord server while solving some of the above-mentioned problems:</p>
        <ul>
            <li>The inscription only require a nickname and a password.</li>
            <li>The use of XMPP and of a dedicated domain name drastically reduce the risk to see it blocked by a firewall.</li>
            <li>An <a href="https://greasyfork.org/en">user script</a> to integrate our webchat directly on CodinGame is under development.</li>
        </ul>
        <p>Don't hesitate to join us!</p>
        <h2>Project status</h2>
        <p>The XMPP server is up and can be reached trough the dedicated webchat located at <a href="https://cheloniangall.com/">cheloniangall.com</a> or via your favorite <a href="https://xmpp.org/software/clients/">XMPP client</a>.</p>
        <p>We are currently working on a full new design for the webchat in the form of a right-sided column, as was the CodinGame's one. Then, we plan to create an user script to allow the integration of our chat on CodinGame.</p>
        <p>After that, the next step will be to save our dear friend Automaton2000, and to give him his right place among us.</p>
        <p>An overview of the project status is available <a href="https://github.com/orgs/ChelonianGall/projects/1">here.</a></p>
        <h2>report and contribution</h2>
        <p>If you are encountering any issues or have a feature request, feel free to ask directly on the chat or to submit an issue on the corresponding <a href="https://github.com/orgs/ChelonianGall/repositories">repository</a>. Same if you want to help on the development.</p>
        <p>Thanks in advance!</p>
    </div>
</div>
