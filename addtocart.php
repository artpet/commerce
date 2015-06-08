<?php
session_start();
$arr = $_SESSION['to_cart'];
$_SESSION['item_cart']=0;
$id = $_GET['goods'];
$repeat = false;
foreach ($arr as $key => $value) {
    #echo $key;
    #echo "-";
    #echo "(" . $value . ")";
    #echo "id=" . $id;
    $_SESSION['item_cart']+=$value;
    if ($key == $id) {
        $quantity = (int)$value;
        $quantity++;
        $arr[$id] = $quantity;
        $repeat = true;
    }
    #echo '<br>';
}
if($repeat ===true){
    $_SESSION['to_cart'] = $arr;
    $_SESSION['item_cart']++;
}
elseif($repeat === false) {
    $arr[$id] = 1;
    $_SESSION['to_cart'] = $arr;
    $_SESSION['item_cart']++;
}
header("Location: ".$_SERVER['HTTP_REFERER']);
#print_r($_SESSION);
#session_destroy();