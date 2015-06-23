<?php
include 'inc/header.inc.php';
if (($inc_page === logged) or ($inc_page === admin))
    include'inc/account.inc.php';
else {
    include'inc/signup.inc.php';
}?>
<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'My account';
        $("#foot-slider").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 6,
            itemsDesktop : [1499,3],
            itemsDesktopSmall : [979,3]

        });
    });


</script>
<?include 'inc/footer.inc.php' ?>
