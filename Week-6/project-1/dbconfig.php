<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function connectDB(){
    $database = "ebeeley";
    $user = "ebeeley";
    $pass = "dreamlike";
    $host = "localhost";
    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
    }
    catch (PDOException $e) {echo $e;}
    return $db; } 
    ?>