<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$cart_items = $_SESSION['cart'];

echo implode(" | ", $cart_items);

// foreach($cart_items as $cart_item) {
//     echo $cart_item;
// }
