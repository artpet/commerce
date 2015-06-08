<?php
session_start();
if ((isset($_GET['delete_from_cart'])) and (isset ($_SESSION['to_cart']))) {
    $id = $_GET['delete_from_cart'];
    $arr = $_SESSION['to_cart'];
    $arr[$id]--;
    $_SESSION['item_cart']--;
    if ($arr[$id] < 1) {
        unset($arr[$id]);
    }
    $_SESSION['to_cart'] = $arr;
    #var_dump($_SESSION['to_cart']);
    header("Location:index.php?view=cart");
}
