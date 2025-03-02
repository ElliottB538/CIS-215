<!doctype html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>

    <form action="project1starter.php" method="get" class="survey">

    <?php

        $globalPassword = '$2y$10$t7eY2wQCX.EQvQg.3S6N6eG1mMZwEl4GMRc8HeT738ADfQvVs.wHm';

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $passwordEntered = $_POST['password'];

            if(password_verify($passwordEntered, $globalPassword)){

                echo 'password is valid';

            }else{

                echo 'password is invalid';

            }

        }

    ?>

        <button type = "Back" name = "back-button" id = "back-button">Back</button>

    </form>

  </body>
</html>