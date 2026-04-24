<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>

<body>


    <?php

    require_once "db.php";

    $id = $_GET['stid']; // from URL 

    $query = "SELECT * FROM `students` WHERE `id` = $id";
    $result = $conn->query($query);

    $student = $result->fetch_assoc();

    echo "<h1>{$student['name']}</h1>";

    ?>


</body>

</html>