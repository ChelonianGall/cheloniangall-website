<?php
    function redirect (string $url)
    {
        header("Location: {$url}", true, 303);
    
        die();
    }
?>