<?php
if ($_GET['view']) {
    switch ($_GET['view']) {
        case home:
            include 'home.php';
            break;
        case whats_new:
            include 'new_goods.php';
            break;
        case specials:
            break;
        case account:
            include 'account.php';
            break;
        case delivery:
            break;
        case contacts:
            include 'contacts.php';
            break;
        case about_us:
            break;
        case cart:
            include 'cart.php';
            break;
        case signup:
            include 'signup.php';
            break;
        case logout:
            include 'logout.php';
            break;
        default:
            include 'home.php';
    }
} elseif ($_GET['goods']) {
    include 'addtocart.php';
    exit;
} elseif ($_GET['delete_from_cart']) {
    include 'inc/deletefromcart.inc.php';
    exit;
}elseif ($_GET['categories']){
    include 'categories.php';
    exit;
} else {
    include 'home.php';
}

