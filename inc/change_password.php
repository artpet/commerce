<?php
session_start();
include '../classes/User.class.php';
$user_id = $_SESSION['user_id'];
if((!empty($_POST['old_password'])) and (!empty($_POST['new_password'])) and (!empty($_POST['new_password_confirm']))){
    if (($_POST['new_password'])===($_POST['new_password_confirm'])){
        $new_password = $_POST['new_password_confirm'];
        $old_password = $_POST['old_password'];
        $db = new DB();
        $db->changePassword($user_id,$old_password,$new_password);
    }
}
header("Location: " . $_SERVER['HTTP_REFERER']);