<?php

// PHP Arrays

// Indexed
$users = array("John", "Kim", "Brad");


// Associative
$user_info = [
    'name' => "Ammar",
    'email' => "ammar@yahoo.com"
];


// echo $users[0];

// echo $user_info['name'] . " - " . $user_info['email'];


// $users[] = "Kamran";
// array_push($users, "Kamran");

// array_pop($users);

// array_unshift($users, "Sara Smith");
// array_shift($users);

// unset($users[1]);

$merged = array_merge($users, ["A", "B", "C"]);



// if (in_array("Kim", $users)) {
//     echo "User exists";
// } else {
//     echo "User not found";
// }

$numbers = [1, 3, 4, 5, 6];

$mapped = array_map(fn($n) => $n * 4, $numbers);

$filtered = array_filter($numbers, fn($n) => $n > 4);



foreach ($filtered as $n) {
    echo $n;
}
