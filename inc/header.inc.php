<?
require_once 'session.php';
require_once 'classes/Order.class.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="../js/lib.js"></script>
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <!-- End WOWSlider.com HEAD section -->
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link href="slider.js" rel="script" type="text/javascript">
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">

    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">

    <!-- Include js plugin -->
    <script src="owl-carousel/owl.carousel.js"></script>
    <title>Home</title>
</head>
<div id="wrapper">
    <header>
        <p id="cart-top"><a href="index.php?view=cart">Shopping Cart</a> now in you cart    <a href="index.php?view=cart"><?=$_SESSION['item_cart']?></a> items</p>
        <div id="logo">
            <a href="index.php"><img id="logo-img" src="images/small_operating-system-97849_640.png"></a>
            <p><a href="index.php">Sales Point</a><br><span><a href="index.php">the best online store</a></span></p>
        </div>
        <? if ($inc_page === logged) {
            include 'inc/logged.php';
        }elseif($inc_page===admin){
            include 'inc/admin_logged.php';
        }else include 'inc/login.php' ?>
        <div id="menu-top">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?view=whats_new">What's New</a></li>
                <li><a href="index.php?view=special">Specials</a></li>
                <li><a href="index.php?view=account">My Account</a></li>
                <li><a href="index.php?view=delivery">Delivery</a></li>
                <li><a href="index.php?view=contacts">Contacts</a></li>
                <li><a href="index.php?view=about">About Us</a></li>
            </ul>
        </div>
    </header>