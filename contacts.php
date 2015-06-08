<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
    <script type="text/javascript" charset="utf-8"
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=_qWazOozo7_dsvK4a4CLLJ-HXsxZLOX4&width=600&height=450&id=map"></script>
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<?include 'inc/header.inc.php' ?>
<div id="contacts">
    <div id="map"></div>
    <div id="working-time">
        <p class="working-time-head">Call-Center</p>

        <p>+7(861) XXX XX XX</p>

        <p>Mon-Fr: 9:00-20:00</p>

        <p>Sat-Sun: 9:00-19:00</p>

        <p class="working-time-head">Cart 24/7/365</p>

        <p>Processing of orders placed during the night from 9:00 to 15:00</p>

        <p></p>

        <p class="working-time-head">Service Center</p>

        <p>+7(861) XXX XX XX</p>

        <p>Mon-Fr: 9:00-20:00</p>

        <p>Sat: 9:00-18:00</p>

        <p>Sun: day off</p>
    </div>
    <div id="contact-form">
        <p class="working-time-head">Feedback</p>

        <form action="index.php?view=contacts" method="post">
            <label for="email-contact-form">Your e-mail: </label><br><input type="email" id="email-contact-form"><br>
            <label for="name-contact-form">Your name: </label><br><input type="text" id="name-contact-form"><br>
            <label for="msg-contact-form">Message: </label><br><textarea name="msg-contact-form" id="msg-contact-form"
                                                                         cols="30" rows="2"></textarea><br>
            <input class="contact-form-btn" type="submit" value="Send"><input class="contact-form-btn" type="reset" value="Clean">
        </form>
    </div>
    <div id="contact-shops">
        <p class="working-time-head">Our Stores</p>
        <p>SomeCity<p>
        <p>SomeStreet</p>
        <p>Phone +7 861 XXX XX XX</p>
        <p>SomeCity<p>
        <p>SomeStreet</p>
        <p>Phone +7 861 XXX XX XX</p>
    </div>
    <div id="contact-job">
        <p class="working-time-head">Careers</p>
        <p>We are looking for a Junior PHP developer to join our team. We work in great atmosphere and value people who want to grow professionally and share their experience with us.</p>
        <p>Send your CV to <a href="mailto:hr@some.mail.com">hr@some.mail.com</a></p>
    </div>
</div>

<?include 'inc/footer.inc.php' ?>

</body>
</html>
<?php

