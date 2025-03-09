<?php
include 'dbconfig.php';
$db = connectDB();

$insert_data $db->prepare("INSERT INTO project1 (email) VALUES (?);");

$email = $_POST["email"];

$insert_data->execute(array($email));


$insert_data $db->prepare("INSERT INTO project1 (age) VALUES (?);");

$age = $_POST["age"];

$insert_data->execute(array($age));


$insert_data $db->prepare("INSERT INTO project1 (gender) VALUES (?);");

$gender = $_POST["gender"];

$insert_data->execute(array($gender));


$insert_data $db->prepare("INSERT INTO project1 (thoughts) VALUES (?);");

$thoughts = $_POST["thoughts"];

$insert_data->execute(array($thoughts));


$insert_data $db->prepare("INSERT INTO project1 (scale) VALUES (?);");

$scale = $_POST["scale"];

$insert_data->execute(array($scale));

?>