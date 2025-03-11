<?php

    $select = $db->prepare("SELECT * FROM project1;");
    $select->execute();

    $info_row = $select->fetch();

    $info_next_row = $select->fetch();

    $info_next_row = $select->fetch();

    $info_next_row = $select->fetch();

    echo ["<h2>Age results</h2>"];

    $select->execute(array($age));

    $age_option = ["age"];
    $counts = array_count_values($age_option);

    foreach($counts as $age_option => $count){

        echo $age_option " : " $count " times";

    }

    echo ["<h2>Gender results</h2>"];

    $info_next_row = $select->fetch();

    $select->execute(array($gender));

    $gender_option = ["gender"];
    $counts = array_count_values($gender_option);

    foreach($counts as $gender_option => $count){

        echo $gender_option_option " : " $count " times";

    }

    echo ["<h2>Thoughts results</h2>"];

    $info_next_row = $select->fetch();

    $select->execute(array($thoughts));

    $text_option = ["thoughts"];
    shuffle($text_option);
    $text_counts = min(3, count($text_option));

    for ($i = 0; $i < $text_counts; $i++){

        echo $text_option[$i];

    }

    echo ["<h2>Scale results</h2>"];

    $info_next_row = $select->fetch();

    $select->execute(array($scale));

    $numbers = ["scale"];
    $sum = array_sum($numbers);
    $number_count = count($numbers);
    $average = $sum / $number_count;
    echo "Average number choosen was: " $average;

?>

<button type ="button" name = "home-page" id = "home-page"><a href = "project1starter.php">Home page</a></button>