<?php

session_start(); // Must be the before everything 


// Set data

$_SESSION['cart'] = [];

if (!in_array("Wireless Headphones", $_SESSION['cart'])) {
    $_SESSION['cart'][] = "Wireless Headphones";
}


if (!in_array("Handbag", $_SESSION['cart'])) {
    $_SESSION['cart'][] = "Handbag";
}


if (!in_array("Wireless Airpods", $_SESSION['cart'])) {
    $_SESSION['cart'][] = "Wireless Airpods";
}

// $_SESSION['userId'] = 5345;
// $_SESSION['isLoggedIn'] = true;



// Should result in:
// [
//     'cart' => [
//         "Wireless Headphones",
//         "Handbag",
//         "Wireless Airpods"
//     ]
// ]
