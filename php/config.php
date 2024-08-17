<?php 
//set variables in env.php
require_once('env.php');

    $conn = new mysqli($hostname, $username, $password, $database);

    if($conn->connect_errno){
        echo "Failed to connect to mysqli: ". $conn -> connect_error;
        exit();
    }
?>