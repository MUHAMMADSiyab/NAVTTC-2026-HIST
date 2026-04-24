<?php

if (isset($_POST['save'])) {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $email = htmlspecialchars($_POST['email']);


    require_once "db.php";


    $query = "
            INSERT INTO `students` 
            (`name`, `age`, `email`) 
            VALUES 
            ('$name', $age, '$email')
        ";

    if ($conn->query($query) === TRUE) {
        header("Location: view-students.php");
    } else {
        echo "Unable to save data";
    }
}
