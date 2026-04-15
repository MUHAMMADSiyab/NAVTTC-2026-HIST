<?php

// Super Globals

// $_POST
// $_GET
// $_SESSION
// $_COOKIE
// $_REQUEST


// Get form data and sanitize
$name =  htmlspecialchars($_POST['name']);
$username =  htmlspecialchars($_POST['username']);
$email =  htmlspecialchars($_POST['email']);
$password =  htmlspecialchars($_POST['password']);

$isValidEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

$validation_errors = [];

if (!$isValidEmail) {
    $validation_errors[] = "Invalid Email";
}


if (empty($name)) {
    $validation_errors[] = "Name is required";
}

if (strlen($username) < 5) {
    $validation_errors[] = "Username must be atleast 5 characters";
}


echo "<pre>";


if (count($validation_errors) > 0) {
    foreach ($validation_errors as $error) {
        echo "<li style='color: red'>$error</li>";
    }

    // TODO 
    // Pass errors to the forms.php and show there
} else {
    $success_msg = "Form submitted successfully";
    header("Location: forms.php?success=$success_msg");
}
