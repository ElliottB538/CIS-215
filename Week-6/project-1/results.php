<!doctype html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>

    <form action="results.php" method="post" class="survey">

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

      <?php

    $passwordEntered = sanitize_input($_POST['password']);
    $globalPassword = '$2y$10$t7eY2wQCX.EQvQg.3S6N6eG1mMZwEl4GMRc8HeT738ADfQvVs.wHm';
    validatePassword($passwordEntered, $globalPassword);

    function validateEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'email is valid';
        } else {
            echo 'email is invalid';
        }
    }

    function validatePassword($passwordEntered, $globalPassword) {
        if (password_verify($passwordEntered, $globalPassword)) {
            echo 'password is valid';
        } else {
            echo 'password is invalid';
        }
    }

    function validateAge($age) {
        $valid_age = ["0-12", "13-17", "18-22", "23-27", "28-32", "33-37", "38-42", "43-47", "48-52", "53-57", "58-62", "63-67", "68+"];
        if (isset($age, $valid_age)) {
            echo 'valid age input';
        } else {
            echo 'invalid age input';
        }
    }

    function validateGender($gender) {
        $valid_gender = ['Male', 'Female', 'Nonbinary', 'Genderfluid', 'Agender', 'Choose not to say/Other'];
        if (in_array($gender, $valid_gender)) {
            echo 'valid gender input';
        } else {
            echo 'invalid gender input';
        }
    }

    function validateText($text) {
        if (is_string($text) && strlen($text) >= 10 && strlen($text) <= 300) {
            echo 'valid text input';
        } else {
            echo 'invalid text input';
        }
    }

    function validateScale($scale) {
        if (is_numeric($scale) && $scale >= 1 && $scale <= 10) {
            echo 'valid scale input';
        } else {
            echo 'invalid scale input';
        }
    }
?>


    </form>

  </body>
</html>