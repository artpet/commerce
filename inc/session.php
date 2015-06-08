<?php
include 'classes/User.class.php';
session_start();

if ((isset($_SESSION['user_login'])) and isset($_SESSION['user_hash'])) {
    $db = new DB();
    if ($db->checkSession($_SESSION['user_login'], $_SESSION['user_hash'])) {
        $inc_page = logged;

    } else {
        $inc_page = unlogged;
    }
}
if (!isset($_SESSION['item_cart'])){
    $_SESSION['item_cart']=0;
}
