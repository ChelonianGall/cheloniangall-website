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

converse.initialize({
    allowed_audio_domains: [],
    allowed_image_domains: [],
    allowed_video_domains: [],
    authentication: "login",
    allow_adhoc_commands: true,
    allow_bookmarks: true,
    allow_chat_pending_contacts: false,
    allow_contact_removal: false,
    allow_contact_requests: false,
    allow_dragresize: false,
    allow_logout: true,
    allow_message_corrections: false,
    allow_message_retraction: false,
    allow_message_styling: true,
    allow_muc_invitations: true,
    allow_non_roster_messaging: false,
    allow_public_bookmarks: false,
    allow_registration: false,
    allow_url_history_change: false,
    allow_user_trust_override: true,
    archived_messages_page_size: 50,
    autocomplete_add_contact: true,
    auto_focus: true,
    auto_list_rooms: true,
    auto_login: true,
    auto_away: 0,
    auto_xa: 0,
    auto_reconnect: true,
    auto_register_muc_nickname: true,
    auto_subscribe: false,
    auto_join_on_invite: false,
    auto_join_private_chats: [],
    auto_join_rooms: [],
    blacklisted_plugins: [],
    bosh_service_url: "https://cheloniangall.com/http-bind/",
    clear_cache_on_logout: false,
    clear_messages_on_reconnection: false,
    chatstate_notification_blacklist: [],
    connection_options: {},
    credentials_url: "/backend/credentials.php",
    csi_waiting_time: 0,
    loglevel: "info",
    dark_theme: "dracula",
    default_domain: "cheloniangall.com",
    default_state: "online",
    discover_connection_methods: false,
    domain_placeholder: "cheloniangall.com",
    emoji_categories: {
        "smileys": ":smiling_imp:",
        "people": ":metal:",
        "activity": ":guitar:",
        "travel": ":flying_saucer:",
        "objects": ":desktop:",
        "nature": ":turtle:",
        "food": ":beer:",
        "symbols": ":skull_crossbones:",
        "flags": ":flag_white:",
        //"custom": ":converse:"
    },
    emoji_categories_label: {
        "smileys": "Smileys and emotions",
        "people": "People",
        "activity": "Activities",
        "travel": "Travel",
        "objects": "Objects",
        "nature": "Animals and nature",
        "food": "Food and drink",
        "symbols": "Symbols",
        "flags": "Flags",
        //"custom": "Stickers"
    },
    emoji_image_path: 'https://twemoji.maxcdn.com/2/',
    enable_muc_push: false,
    enable_smacks: false,
    filter_by_resource: false,
    filter_url_query_params: null,
    //fullname: '',
    geouri_regex: "/https:\/\/www.openstreetmap.org\/.*#map=[0-9]+\/([\-0-9.]+)\/([\-0-9.]+)\S*/g",
    geouri_replacement: "https://www.openstreetmap.org/?mlat=$1&mlon=$2#map=18/$1/$2",
    hide_muc_participants: true,
    hide_offline_users: false,
    hide_open_bookmarks: false,
    i18n: "en",
    idle_presence_timeout: 0,
    image_urls_regex: null,
    //jid: "",
    keepalive: true,
    locales: ['en'],
    locked_domain: "cheloniangall.com",
    locked_muc_domain: "hidden",
    locked_muc_nickname: false,
    mam_request_all_pages: true,
    muc_hats: ["moderator"],
    muc_mention_autocomplete_min_chars: 0,
    muc_mention_autocomplete_filter: 'contains',
    muc_mention_autocomplete_show_avatar: true,
    message_archiving: "always",
    message_archiving_timeout: 20000,
    message_carbons: true,
    message_limit: 0,
    modtools_disable_assign: ['member', 'outcast', 'visitor'],
    modtools_disable_query: ['member', 'outcast', 'visitor'],
    muc_clear_messages_on_leave: false,
    muc_disable_slash_commands: false,
    muc_domain: "conference.cheloniangall.com",
    muc_fetch_members: true,
    muc_history_max_stanzas: 0,
    muc_instant_rooms: false,
    muc_nickname_from_jid: false,
    muc_send_probes: false,
    muc_respect_autojoin: true,
    muc_roomid_policy: null,
    muc_roomid_policy_hint: null,
    //muc_show_info_messages:,
    muc_show_logs_before_join: false,
    muc_subscribe_to_rai: false,
    //nickname: "",
    notify_all_room_messages: false,
    notification_delay: 0,
    notification_icon: 'logo/conversejs-filled.svg',
    notify_nicknames_without_references: false,
    oauth_providers: [],
    omemo_default: false,
    ping_interval: 60,
    play_sounds: false,
    prebind_url: null,
    priority: 0,
    providers_link: 'https://xmpp.net/directory.php',
    assets_path: '/dist/',
    persistent_store: 'localStorage',
    prune_messages_above: 50,
    pruning_behavior: 'unscrolled',
    push_app_servers: [],
    registration_domain: '',
    render_media: false,
    roomconfig_whitelist: [],
    root: window.document,
    roster_groups: true,
    send_chat_state_notifications: false,
    send_chat_markers: ['received', 'displayed', 'acknowledged'],
    show_chat_state_notifications: false,
    show_client_info: true,
    show_connection_url_input: false,
    show_controlbox_by_default: false,
    show_desktop_notifications: false,
    show_message_avatar: true,
    show_images_inline: false,
    show_retraction_warning: false,
    show_send_button: false,
    show_tab_notifications: true,
    singleton: false,
    smacks_max_unacked_stanzas: 5,
    sounds_path: "${assets_path}/sounds/",
    sticky_controlbox: false,
    strict_plugin_dependencies: false,
    synchronize_availability: true,
    theme: "default",
    time_format: "HH:mm",
    use_system_emojis: false,
    visible_toolbar_buttons: {
        call: false,
        spoiler: false,
        emoji: true,
        toggle_occupants: true
    },
    websocket_url: undefined,
    view_mode: 'overlayed',
    whitelisted_plugins: [],
    xhr_user_search_url: null
});

var logoutSetupIntervalID;

function setupLogout ()
{
    if (document.getElementsByClassName("logout")[0]) {

        document.getElementsByClassName("logout")[0].outerHTML = 
            document.getElementsByClassName("logout")[0].outerHTML;

        document.getElementsByClassName("logout")[0].getElementsByTagName('svg')[0].remove();

        document.getElementsByClassName("logout")[0].onclick = function() {
            
            document.location = '/backend/logout.php';
        };

        clearInterval(logoutSetupIntervalID);
    }
}

document.addEventListener("DOMContentLoaded",

    function ()
    {
        logoutSetupIntervalID = setInterval(setupLogout, 100);

        return true;
    }
);