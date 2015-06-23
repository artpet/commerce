<?php
include 'inc/session.php';
include 'inc/header.inc.php';
?>
<body>
<div id="special">
    <div><p>Banners for Special Events</p></div>
    <div><p>Banners for Special Events</p></div>
    <div><p>Banners for Special Events</p></div>

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
            document.title = 'Special';
    });

</script>
