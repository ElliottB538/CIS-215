<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <title>Survey: Wellness Checkup</title>  
</head>
<body>

<form action="results.php" method="post" class="survey">

<div>

<h1>Wellness Checkup</h1>

<fieldset>

    <legend>Sign in:</legend>

    <label for = "email">Enter your email: </label>
    <input type="email" name="email" id="email" required>

    <div>

    <label for = "password">Enter your password (8 characters minimum): </label>
    <input type="password" name="password" id="password" minlength = "8" required>

</fieldset>

<fieldset>

    <legend>Personal Info:</legend>

    <label>What age are you? </label>

    <input type="radio" name="age" id="0"><label>0-12 </label>
    <input type="radio" name="age" id="1"><label>13-17 </label>
    <input type="radio" name="age" id="2"><label>18-22 </label>
    <input type="radio" name="age" id="3"><label>23-27 </label>
    <input type="radio" name="age" id="4"><label>28-32 </label>
    <input type="radio" name="age" id="5"><label>33-37 </label>
    <input type="radio" name="age" id="6"><label>38-42 </label>
    <input type="radio" name="age" id="7"><label>43-47 </label>
    <input type="radio" name="age" id="8"><label>48-52 </label>
    <input type="radio" name="age" id="9"><label>53-57 </label>
    <input type="radio" name="age" id="10"><label>58-62 </label>
    <input type="radio" name="age" id="11"><label>63-67 </label>
    <input type="radio" name="age" id="12"><label>68+ </label>

    <div>

    <label>How do you identify?</label>

    <select name="gender" id="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
        <option value="nb">Nonbinary</option>
        <option value="gf">Genderfluid</option>
        <option value="a">Agender</option>
        <option value="o">Choose not to say/Other</option>
    </select>

</fieldset>

<fieldset>

    <legend>Lets catch up!</legend>

    <label for = "thoughts">How are you feeling?</label>
    <textarea id = "thoughts" name = "thoughts" minlength = "20" maxlength = "300">
    </textarea>

    <div>

    <label for = "scale">On a scale from 1 to 10, do you think you would benifit from talking to someone?<label>
    <input type = "number" id = "scale" name = "scale" min = "1" max = "10">

</fieldset>

<div>

<button type = "submit" name = "submit-button" id = "submit-button">Submit</button>

</div>

</form>

<?php

        $email = $_POST['email'];

        function validateEmail($email){

            if (filter_var($email, FILTER_VALIDATE_EMAIL)){

                echo 'email is valid';

            }else{

                echo 'email is invalid';

            }

        }

        $globalPassword = '$2y$10$t7eY2wQCX.EQvQg.3S6N6eG1mMZwEl4GMRc8HeT738ADfQvVs.wHm';

        $passwordEntered = $_POST['password'];

        function validate_password($passwordEntered, $globalPassword){

        if(password_verify($passwordEntered, $globalPassword)){

                echo 'password is valid';

        }else{

            echo 'password is invalid';

        }

        }

        $age = $_POST['age'];

        function validate_age($age){

            if (in_array($age)){

                echo 'valid input'

            }else{

                echo 'invalid input'

            }

        }

        $gender = $_POST['gender'];

        function validateGender($gender){

            if (in_array($gender)){

                echo 'valid input'

            }else{

                echo 'invalid input'

            }

        }

        $text = $_POST['thoughts'];

        function validate_text($text){

            if (is_string($text)){

                echo 'valid input'

            }else{

                echo 'invalid input'

            }

        }


        $scale = ['scale'];

        function validate_scale($scale){

            if (is_numeric($scale)){

                echo 'valid input'

            }else{

                echo 'invalid input'

            }

        }

    ?>

    </body>

</html>