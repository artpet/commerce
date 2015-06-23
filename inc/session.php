<?php
require_once 'classes/User.class.php';
session_start();

if ((isset($_SESSION['user_login'])) and isset($_SESSION['user_hash'])) {
    $db = new DB();
    if (($db->checkSession($_SESSION['user_login'], $_SESSION['user_hash']))==0) {
        $inc_page = logged;

    } elseif(($db->checkSession($_SESSION['user_login'], $_SESSION['user_hash']))==1) {
        $inc_page = admin;
    }else{
        $inc_page = unlogged;
    }
}
if (!isset($_SESSION['item_cart'])){
    $_SESSION['item_cart']=0;
}
