

<?php

function dbSetup()
{
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $dbName= 'shop';

    $conn = new mysqli($host, $user, $pass);

    if ($conn->connect_error) {
        die ("Connection error:".$conn->connect_error);
    }


    // Creating database if not exists in the system.
    $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
    $conn->query($sql);

    // Creating table users
    $conn = new mysqli($host, $user, $pass, $dbName);
    $sql = "CREATE TABLE users(
        id INT(2) PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50), 
        email VARCHAR(100), 
        pass VARCHAR(20)
        )";
    $conn->query($sql);


    

}
?>