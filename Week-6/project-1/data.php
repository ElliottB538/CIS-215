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

<!doctype html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>

    <form action="project1starter.php" method="post" class="survey">

        <h1>Results!</h1>

        <h2>Contact Info:</h2>

        <?php

            $email = $_POST["email"];

            echo $email;

        ?>

        <h2>Personal Info</h1>

        <?php

            $age = $_POST["age"];

            echo $age;

        ?>

        <?php

            $gender = $_POST["gender"];

            echo $gender;

        ?>

        <h2>Your feelings</h2>

        <?php

            $thoughts = $_POST["thoughts"];

            echo $thoughts;

        ?>

        <?php

            $scale = $_POST["scale"];

            echo $scale;

        ?>
            
      <button type = "button" name = "back-button" id = "back-button" onClick = "history.back()">Back</button>
      <button type ="button" name = "summary-page" id = "summary-page"><a href = "summary.php">Data Summary Page</a></button>

</form>

</html>