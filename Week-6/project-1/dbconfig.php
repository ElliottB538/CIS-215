<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function connectDB(){
    $database = "ebeeley";
    $user = "ebeeley";
    $pass = "dreamlike";
    $host = "localhost";
    try {
        include 'dbconfig.php';
        $db = connectDB();
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
        echo "db success"; }    # You’ll need to take this echo out when you know it’s working
    catch (PDOException $e) {echo $e;}
    return $db; } 

    ?>