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

    <input type="radio" name="age" id="0" value = "0-12"><label>0-12 </label>
    <input type="radio" name="age" id="1" value = "13-17"><label>13-17 </label>
    <input type="radio" name="age" id="2" value = "18-22"><label>18-22 </label>
    <input type="radio" name="age" id="3" value = "23-27"><label>23-27 </label>
    <input type="radio" name="age" id="4" value = "28-32"><label>28-32 </label>
    <input type="radio" name="age" id="5" value = "33-37"><label>33-37 </label>
    <input type="radio" name="age" id="6" value = "38-42"><label>38-42 </label>
    <input type="radio" name="age" id="7" value = "43-47"><label>43-47 </label>
    <input type="radio" name="age" id="8" value = "48-52"><label>48-52 </label>
    <input type="radio" name="age" id="9" value = "53-58"><label>53-57 </label>
    <input type="radio" name="age" id="10" value = "58-62"><label>58-62 </label>
    <input type="radio" name="age" id="11" value = "63-67"><label>63-67 </label>
    <input type="radio" name="age" id="12" value = "68+"><label>68+ </label>

    <div>

    <label>How do you identify?</label>

    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="nonbinary">Nonbinary</option>
        <option value="genderfluid">Genderfluid</option>
        <option value="agender">Agender</option>
        <option value="other">Choose not to say/Other</option>
    </select>

</fieldset>

<fieldset>

    <legend>Lets catch up!</legend>

    <label for = "thoughts">How are you feeling?</label>
    <textarea id = "thoughts" name = "thoughts" minlength = "20" maxlength = "300" placeholder = "Share your thoughts...">
    </textarea>

    <div>

    <label for = "scale">On a scale from 1 to 10, do you think you would benifit from talking to someone?<label>
    <input type = "number" id = "scale" name = "scale" min = "1" max = "10">

</fieldset>

<div>

<button type = "submit" name = "submit-button" id = "submit-button">Submit</button>
<button type ="button" name = "summary-page" id = "summary-page"><a href = "summary.php">Data Summary Page</a></button>

</div>

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