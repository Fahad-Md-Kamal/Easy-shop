<?php

function products(){
    include_once 'dbsetup.php';
    dbSetup();
    include_once 'dbconnection.php';
    $conn = connect();

    $sql = "SELECT * FROM products";

    $result = $conn->query($sql);

    return $result;
}
?>