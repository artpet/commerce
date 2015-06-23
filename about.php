<?php
include 'inc/session.php';
include 'inc/header.inc.php';
?>
<body>
    <div id="about">
        <div>
            <p>This is not a commercial project, a website was created in order to demonstrate my knowledge. If someone helped my code let me know, I will be pleased.</p>
            <p>Thank you for coming!</p>
        </div>
    </div>
</body>
<?include 'inc/footer.inc.php'?>
<script>$(document).ready(function () {
        $("#foot-slider").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 6,
            itemsDesktop : [1499,3],
            itemsDesktopSmall : [979,3]
        });
            document.title = 'About us';
    });
</script>