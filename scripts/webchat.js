/**
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
**/

converse.initialize({
    allow_contact_removal: false,
    allow_contact_requests: false,
    allow_logout: true,
    allow_message_corrections: false,
    allow_message_retraction: false,
    allow_registration: false,
    auto_login: true,
    auto_register_muc_nickname: true,
    bosh_service_url: "https://cheloniangall.com/http-bind/",
    credentials_url: "/backend/credentials.php",
    discover_connection_methods: false,
    hide_muc_participants: true,
    i18n: "en",
    keepalive: true,
    locked_domain: "cheloniangall.com",
    locked_muc_domain: "hidden",
    muc_domain: "cheloniangall.com",
    muc_mention_autocomplete_filter: 'starts_with',
    show_controlbox_by_default: true,
    show_desktop_notifications: false,
    visible_toolbar_buttons: {
        call: false,
        spoiler: false,
        emoji: true,
        toggle_occupants: true
    }
});

function logout ()
{
    document.getElementsByClassName("logout")[0].click();
}

/*
- Review the whole configuration.
- Fix the available rooms list.
*/