<?php
if(!empty($_REQUEST['height']) && !empty($_REQUEST['length']) && !empty($_REQUEST['width'])){
    $delivery = 0;
    $totalPrice = 0;

    if($_REQUEST['weigth'] <= 5 && $_REQUEST['height'] <= 50 && $_REQUEST['length'] <= 50 && $_REQUEST['width'] <= 50) {
        $delivery = 300;
    } elseif ($_REQUEST['weigth'] <= 10 && $_REQUEST['height'] <= 100 && $_REQUEST['length'] <= 100 &&
        $_REQUEST['width'] <= 100) {
        $delivery = 500;
    } elseif ($_REQUEST['weigth'] <= 20 && $_REQUEST['height'] <= 150 && $_REQUEST['length'] <= 150 &&
        $_REQUEST['width'] <= 150) {
        $delivery = 800;
    } elseif($_REQUEST['weigth'] < 20) {
        $delivery = $_REQUEST['weigth'] * 30;
    }
    elseif ($_REQUEST['height'] < 150 || $_REQUEST['length'] < 150 || $_REQUEST['width'] < 150) {
        $delivery = $_REQUEST['height'] * 10 + $_REQUEST['length'] * 10 + $_REQUEST['width'] * 10;
    }

    $totalPrice = $_REQUEST['price'] + $delivery;

    echo 'Стоимость доставки на товар ' . $_REQUEST['nameProduct'] . ' = ' . $delivery . ' рублей. Общая стоимость 
    за все = ' . $totalPrice . " рублей";
} else {
    echo 'Вы заполнили не все поля';
}