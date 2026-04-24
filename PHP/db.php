<?php

$host = "localhost";
$user = "root";
$password = "P@ssw0rd";
$db = "school";


try {
    $conn = new mysqli($host, $user, $password, $db);
} catch (mysqli_sql_exception $e) {
    echo "Database connection failed: " . $e->getMessage();
}
