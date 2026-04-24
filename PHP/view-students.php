<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
</head>

<body>
    <table width="80%" border="1" cellspacing="0" cellpadding="6">

        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Date Added</th>
            </tr>
        </thead>

        <tbody>

            <?php

            require_once "db.php";

            $query = "SELECT * FROM `students`";
            $result = $conn->query($query);

            $students = $result->fetch_all(MYSQLI_ASSOC);

            foreach ($students as $student) {
                $id = $student['id'];
                $name = $student['name'];
                $age = $student['age'];
                $email = $student['email'];
                $dateAdded = date("M d Y h:i:s A", strtotime($student['created_at']));

                echo "<tr>
                        <td>{$id}</td>
                        <td><a href='student-details.php?stid={$id}'>{$name}</a></td>
                        <td>{$age}</td>
                        <td>{$email}</td>
                        <td>{$dateAdded}</td>
                      </tr>";
            }

            ?>



        </tbody>

    </table>

</body>

</html>