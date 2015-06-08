<?
include 'session.php';
?>

<div id="wrapper">
    <header>
        <p id="cart-top"><a href="index.php?view=cart">Shopping Cart</a> now in you cart    <a href="index.php?view=cart"><?=$_SESSION['item_cart']?></a> items</p>

        <div id="logo">
            <a href="index.php"><img id="logo-img" src="images/small_operating-system-97849_640.png"></a>

            <p><a href="index.php">Sales Point</a><br><span><a href="index.php">the best online store</a></span></p>
        </div>
        <? if ($inc_page === logged)
            include 'inc/logged.php';
        else include 'inc/login.php' ?>
        <div id="menu-top">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?view=whats_new"">What's New</a></li>
                <li><a href="">Specials</a></li>
                <li><a href="index.php?view=account">My Account</a></li>
                <li><a href="">Delivery</a></li>
                <li><a href="index.php?view=contacts">Contacts</a></li>
                <li><a href="">About Us</a></li>
            </ul>
        </div>
    </header>