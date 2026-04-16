<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>

<body>

    <?php
    if (isset($_GET['success'])) {
        $msg = $_GET['success'];
        echo "<h4>$msg</h4>";
    }

    ?>


    <div class="errors"></div>
    <form action="process.php" method="post" id="form">
        <label for="name">Name</label>
        <input type="name" name="name" id="name" required> <br><br>

        <label for="username">Username</label>
        <input type="text" name="username" id="username"> <br><br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br><br>

        <input type="submit" value="Register">

    </form>

    <script>
        const form = document.getElementById('form');

        form.addEventListener('submit', async function(e) {
            e.preventDefault();


            const formData = new FormData(this);
            // formData.append(
            //     'username', 
            //     document.getElementById('username').value
            // )

            const res = await fetch('process.php', {
                method: "post",
                body: formData,
            });

            const data = await res.text();


            const errorsElement = document.querySelector('.errors');
            errorsElement.innerHTML += data;

        })
    </script>

</body>

</html>