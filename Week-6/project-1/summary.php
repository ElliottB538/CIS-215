<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <title>Summary Page</title>  
</head>
    <body>

        <form action="project1starter.php" method="post" class="survey">

        <?php

            include 'dbconfig.php';
            $db = connectDB();

            $select = $db->prepare("SELECT * FROM project1;");
            $select->execute();

            $info_row = $select->fetchAll();

            echo "<h2>Age results</h2>";

            $age_counts = array_count_values(array_column($info_row, 'age'));

            foreach($age_counts as $age => $count){

                echo $age . ": " . $count . " times ";

            }

            echo "<h2>Gender results</h2>";

            $gender_counts = array_count_values(array_column($info_row, 'gender'));

            foreach($gender_counts as $gender => $count){

                echo $gender . ": " . $count . " times ";

            }

            echo "<h2>Thoughts results</h2>";

            $thoughts = array_column($info_row, 'thoughts');
            shuffle($thoughts);
            $text_counts = min(3, count($thoughts));

            for ($i = 0; $i < $text_counts; $i++){

                echo $thoughts[$i];

            }

            echo "<h2>Scale results</h2>";

            $scale_numbers = array_column($info_row, 'scale');
            $sum = array_sum($scale_numbers);
            $number_count = count($scale_numbers);
            $average = $sum / $number_count;
            echo "Average number choosen was: " . $average;

        ?>

        <button type ="button" name = "home-page" id = "home-page"><a href = "project1starter.php">Home page</button>

        </form>

        </body>

</html>
