<?php
    function getDatabaseConnection ()
    {
        $host = 'host';
        $database = 'database';
        $user = 'user';
        $password = 'password';
        
        return new PDO("mysql:host={$host};dbname={$database}", $user, $password);
    }
?>