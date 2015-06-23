<?php
include 'classes/User.class.php';

$userLogin = $_POST['userLogin'];
$userPassword = $_POST['userPassword'];
$user = new User();
$user->userLogin($userLogin, $userPassword);
header("Location: ".$_SERVER['HTTP_REFERER']);
