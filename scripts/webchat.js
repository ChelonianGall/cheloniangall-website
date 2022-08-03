converse.initialize({
    
    allow_contact_removal: false,
    allow_contact_requests: false,
    allow_logout: true,
    allow_message_corrections: false,
    allow_message_retraction: false,
    allow_registration: false,
    auto_login: true,
    auto_register_muc_nickname: true,
    auto_join_rooms: ['fr@conference.cheloniangall.com', 'world@conference.cheloniangall.com'],
    bosh_service_url: "https://cheloniangall.com/http-bind/",
    credentials_url: "https://cheloniangall.com/backend/credentials.php",
    discover_connection_methods: false,
    hide_muc_participants: true,
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