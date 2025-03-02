<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Survey: Wellness Checkup</title>  <!-- TODO: Change "Survey Name" to the topic of your survey -->
</head>
<body>


<!-- TODO: Fix all bugs/poor practice in the form -->
<form action="results.php" method="get" class="survey">

<h1>Wellness Checkup</h1>

<fieldset>

    <legend>Sign in:</legend>

    <label for = "email-input">Enter your email: </label>
    <input type="email" name="email-name" id="email-id">

    <label for = "pw-input">Enter your password: </label>
    <input type="text" name="pw-name" id="pw-id">

</fieldset>

<fieldset>

    <legend>Personal Info:</legend>

    <label>What age are you? </label>

    <input type="radio" name="0-12" id="0"><label>0-12 </label>
    <input type="radio" name="13-17" id="1"><label>13-17 </label>
    <input type="radio" name="18-22" id="2"><label>18-22 </label>
    <input type="radio" name="23-27" id="3"><label>23-27 </label>
    <input type="radio" name="28-32" id="4"><label>28-32 </label>
    <input type="radio" name="33-37" id="5"><label>33-37 </label>
    <input type="radio" name="38-42" id="6"><label>38-42 </label>
    <input type="radio" name="43-47" id="7"><label>43-47 </label>
    <input type="radio" name="48-52" id="8"><label>48-52 </label>
    <input type="radio" name="53-57" id="9"><label>53-57 </label>
    <input type="radio" name="58-62" id="10"><label>58-62 </label>
    <input type="radio" name="63-67" id="11"><label>63-67 </label>
    <input type="radio" name="68+" id="12"><label>68+ </label>

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
    <textarea id = "thoughts" name = "thoughts">
    </textarea>

    <label for = "scale">On a scale from 1 to 10, do you think you would benifit from talking to someone?<label>
    <input type = "number" id = "scale" name = "scale" min = "1" max = "10">

</fieldset>

<!-- TODO: Add your own survey questions -->

</form>

<!-- TODO: All the backend PHP/SQL stuff! (you may need a separate file for this!) -->

</body></html>