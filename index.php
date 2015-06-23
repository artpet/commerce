<?php
if ($_GET['view']) {
    switch ($_GET['view']) {
        case home:
            include 'home.php';
            break;
        case whats_new:
            include 'new_goods.php';
            break;
        case account:
            include 'account.php';
            break;
        case contacts:
            include 'contacts.php';
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
        case special:
            include 'special.php';
            break;
        case admin_panel:
            include 'admin.php';
            break;
        case admin_orders:
            include 'orders.php';
            break;
        case about:
            include 'about.php';
            break;
        case delivery:
            include 'delivery.php';
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
} elseif ($_GET['categories']) {
    include 'categories.php';
    exit;
} elseif ($_GET['goods_detail']){
    include 'goods_detail.php';
    exit;
}else {
    include 'home.php';
}

