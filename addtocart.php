<?php
//------------Добавляем POSTом id товаров в корзину-----//
session_start();
$arr = $_SESSION['to_cart'];
$all_items = $_SESSION['item_cart'];//сохраняем кол-во элементов
$_SESSION['item_cart']=0; // обнуляем количество в сессии

if (!empty($_POST['addgoods'])) {
    //echo('addgoods');
    $id = (int)$_POST['addgoods'];
    $repeat = false;
    foreach ($arr as $key => $value) {
        $_SESSION['item_cart'] += $value;//увеличиваем счетчик в шапке
        if ($key == $id) {               //увеличиваем кол-во определенного id на 1, если он уже был ранее
            $quantity = (int)$value;
            ++$quantity;
            $arr[$id] = $quantity;
            $repeat = true;
        }
        #echo '<br>';
    }
    if ($repeat === true) {   //записывыем все обратно в сессии
        $_SESSION['to_cart'] = $arr;
        ++$_SESSION['item_cart'];
    } elseif ($repeat === false) { //если id впервые записываем и кол-во присваеваем 1 и записываем в сессии
        $arr[$id] = 1;
        $_SESSION['to_cart'] = $arr;
        ++$_SESSION['item_cart'];
    }
}
///------------Удаляем POSTом id товаров из корзины-----//
//$_POST['deletegoods'];
if (!empty($_POST['deletegoods'])) {
    //echo ('deletegoods');
    $id = (int)$_POST['deletegoods'];
    foreach ($arr as $key => $value){
        if ($key == $id){
            $quantity = (int)$value;
            --$quantity;
            if($quantity<0)
                $quantity=0;
            $arr[$id] = $quantity;
            --$all_items;
        }
        $_SESSION['to_cart'] = $arr;
        $_SESSION['item_cart'] = $all_items;

    }
}
///------------Удаляем POSTом строку товаров из корзины-//
//$_POST['rowdeletegoods'];

if (!empty($_POST['rowdeletegoods'])) {
    echo('rowdeletegoods');
    $id = (int)$_POST['rowdeletegoods'];
    foreach ($arr as $key => $value) {
        if ($key == $id) {
            $quantity = (int)$value;
            unset($arr[$id]);
            $all_items -= $quantity;
        }
        $_SESSION['to_cart'] = $arr;
        $_SESSION['item_cart'] = $all_items;
    }
}



//header("Location: ".$_SERVER['HTTP_REFERER']);