<?php
    include 'dbconfig.php';
    $db = connectDB();

    $insert_data = $db->prepare("INSERT INTO project1 (email, age, gender, thoughts, scale) VALUES (?, ?, ?, ?, ?);");

    $email = $_POST["email"];

    $age = $_POST["age"];

    $gender = $_POST["gender"];

    $thoughts = $_POST["thoughts"];

    $scale = $_POST["scale"];

    $insert_data->execute(array($email, $age, $gender, $thoughts, $scale));

?>