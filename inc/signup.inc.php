<?php
?>

<div id="registration">
    <p class="working-time-head">Registration</p>

    <form action="registration.php" method="post">
        <label for="registration_name">Your login:</label><br>
        <input type="text" name="registration_name" id="registration_name" autofocus="yes"
               placeholder="Enter your login">

        <div class="registration_correct">

            <p></p></div>
        <br>
        <label for="registration_email">Your email:</label><br>
        <input type="text" name="registration_email" id="registration_email" placeholder="Enter your email">

        <div class="registration_correct">

            <p></p></div>
        <br>
        <label for="registration_password">Enter password:</label><br>
        <input type="password" name="registration_password" id="registration_password"
               placeholder="Enter your password">

        <div class="registration_correct">

            <p></p></div>
        <br>
        <label for="registration_password_confirm">Confirm password:</label><br>
        <input type="password" name="registration_password_confirm" id="registration_password_confirm"
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
        $("#registration_name").on('keyup', function () {
            var reg = /^[a-z0-9_-]{3,16}$/;
            var tex = $(this).val();
            var elem = $('#registration_name');
            checkField(reg, tex, elem);

        });

        $("#registration_email").on('keyup', function () {
            var reg = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
            var tex = $(this).val();
            var elem = $("#registration_email");
            checkField(reg, tex, elem);
        });

        $("#registration_password").on('keyup', function () {
            var reg = /^(?=[^\d_].*?\d)\w(\w|[!@#$%]){7,20}/;
            var tex = $(this).val();
            var elem = $("#registration_password");
            checkField(reg, tex, elem);
        });

        $("#registration_password_confirm").on('keyup', function () {
            var reg = /^(?=[^\d_].*?\d)\w(\w|[!@#$%]){7,20}/;
            var tex = $(this).val();
            var elem = $("#registration_password_confirm");
            checkField(reg, tex, elem);
        });

        function checkField(reg, tex, elem) {
            if (reg.test(tex) == true) {
                elem.next().find('p').text('Correct  ');
                elem.next().find('p').prepend('<img src="images/correct_1.gif">');
            } else {
                elem.next().find('p').text('Incorrect');
                elem.next().find('p').prepend('<img src="images/incorrect_2.gif">');
            }
        }

    });
</script>