<?php
?>

<div id="registration">
    <p class="working-time-head">Registration</p>

    <form action="registration.php" method="post">
        <label for="registration_name">Your login:</label><br>
        <input type="text" name="registration_name" id="registration_name" required autofocus="yes"
               placeholder="Enter your login">

        <div class="registration_correct">

            <p></p></div>
        <br>
        <label for="registration_email">Your email:</label><br>
        <input type="text" name="registration_email" id="registration_email" required placeholder="Enter your email">

        <div class="registration_correct">

            <p></p></div>
        <br>
        <label for="registration_password">Enter password:</label><br>
        <input type="password" name="registration_password" required id="registration_password"
               placeholder="Enter your password">

        <div class="registration_correct">

            <p></p></div>
        <br>
        <label for="registration_password_confirm">Confirm password:</label><br>
        <input type="password" name="registration_password_confirm" required id="registration_password_confirm"
               placeholder="Confirm your password">

        <div class="registration_correct">

            <p></p></div>
        <br>
        <input class="contact-form-btn" type="submit" value="Registration">
        <input class="contact-form-btn" type="reset" value="Clear form">
    </form>
</div>


<script>
    $(document).ready(function () {
        checkRegForm();
    });
</script>