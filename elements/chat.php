<?php
    if (isset($_SESSION['login']) && $_SESSION['login'] == 'valid') {
?>
    <script src = "scripts/webchat.js"></script>
<?php } ?>