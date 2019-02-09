

<?php

function connect()
{
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbName= 'shop';

    $conn = new mysqli($host, $user, $pass, $dbName);
    return $conn;
}


?>