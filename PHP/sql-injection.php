<?php

require_once "db.php";

// SELECT * FROM `students` WHERE `name` = '' OR 1=1#'


$name = $_POST['name'];


// PREPARED STATEMENTS
$query = "SELECT * FROM `students` WHERE `name` = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('s', $name);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " | " . $row['email'];
}
