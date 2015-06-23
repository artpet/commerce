<?
include 'classes/Order.class.php';
include 'inc/session.php';
$order = new Order();
if(!empty($_POST['get_orders'])){
    $result = $order->getAllOrders();
    $json_string = json_encode($result);
    echo ($json_string);
}elseif(!empty($_POST['order'])) {
    $result = $order->getCurrentOrder($_POST['order']);
    //var_dump($result);
    $json_string = json_encode($result);
    echo ($json_string);
}elseif(!empty($_POST['processed_order'])){
    if($order->processingOrder($_POST['processed_order'])){
        echo 'Order processed!';
    };
}else {
    $items_in_cart = $_SESSION['to_cart'];
    $user = $_SESSION['user_login'];
    $hash = $_SESSION['user_hash'];
    $user_id = $_SESSION['user_id'];
    if (empty($_SESSION['user_id']) or ($_SESSION['user_id']<=0))
        $user_id = 41;
    $order->addNewOrder($user_id, 1, $items_in_cart);
    unset($_SESSION['to_cart']);
    $_SESSION['item_cart'] = 0;
    header("Location: ".$_SERVER['HTTP_REFERER']);
}
