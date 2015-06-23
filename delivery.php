<?php
include 'inc/session.php';
include 'inc/header.inc.php';
?>
<body>
    <div id="delivery">
        <p>At this point it shall be described delivery service. Since this is a non-commercial website, this section is omitted.</p>
    </div>
</body>
<?include 'inc/footer.inc.php';?>
<script>
    $(document).ready(function () {
        $("#foot-slider").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items : 6,
            itemsDesktop : [1499,3],
            itemsDesktopSmall : [979,3]
        });
            document.title = 'Delivery';
    });

</script>
