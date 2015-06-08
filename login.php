<?php
//include 'classes/DB.class.php';
include 'classes/User.class.php';

$userLogin = $_POST['userLogin'];
$userPassword = $_POST['userPassword'];
$user = new User();
$user->userLogin($userLogin,$userPassword);
header("Location: ".$_SERVER['HTTP_REFERER']);
#
#print_r($_SESSION);
#session_destroy();
#echo 'cookie';


/*print_r($_SESSION);
if((isset($_SESSION['user_login'])) and isset($_SESSION['user_password'])){
    $db = new DB();
    if($db->checkLogin($_SESSION['user_login'],$_SESSION['user_password'])){
        echo 'all good';
    } #all good
    else 'Bad name or password';
}
echo 'end';
*/
//$db = new DB();
//$res = $db->checkUser($userLogin,$userPassword);
//if ($res != NULL and $res === $userPassword){
//    echo 'Ok';
//    $_SESSION['user_login'] = $userLogin;
//    $_SESSION['user_password'] = $userPassword;
//    print_r($_SESSION);
//}
//else echo 'Error login or bab password!';