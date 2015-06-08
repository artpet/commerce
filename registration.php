<?php
include 'classes/User.class.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $registration_name = $_POST['registration_name'];
    $registration_email = $_POST['registration_email'];
    $registration_password = $_POST['registration_password'];
    $registration_password_confirm = $_POST['registration_password_confirm'];
    if ($registration_password === $registration_password_confirm) {
        $user = new User();
        if ($user->newUser($registration_name, $registration_email, $registration_password)) {
            $user->userLogin($registration_name, $registration_password);
            header('Location: index.php?view=account');
        } else header("Location: " . $_SERVER['HTTP_REFERER']);
    } else
        header('Location: index.php?view=signup');
}