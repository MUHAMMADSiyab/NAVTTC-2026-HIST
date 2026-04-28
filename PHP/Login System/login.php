<?php


require_once "Auth.php";

$auth = new Auth();
$auth->redirectIfAutenticated();

$error = "";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $token = $_POST['csrf_token'];

    if (!$auth->validateCsrfToken($token)) {
        $error = "Invalid Request. Please try later.";
    } else {
        $email = trim($_POST['email'] ?? "");
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            $error = "Email and passwords are required fields.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid Email.";
        } elseif (!$auth->attempt($email, $password)) {
            $error = "Provided credentials are incorrect.";
        } else {
            if (isset($_POST['remember'])) {
                $userId = $auth->user()['id'];
                $auth->setRememberToken($userId);
            }

            header("Location: dashboard.php");
            exit;
        }
    }
}

$csrfToken = $auth->generateCsrfToken();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title>User Login</title>

    <style>
        .error {
            color: red;
        }

        div {
            margin-block: 15px;
        }
    </style>
</head>

<body>
    <main class="container">
        <h1>User Login</h1>

        <?php if (!empty($error)): ?>
            <p class="error">
                <?php echo $error; ?>
            </p>
        <?php endif; ?>


        <form action="login.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">

            <div>
                <label for="email">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="<?php echo htmlspecialchars($_POST['email'] ?? "") ?>">
            </div>

            <div>
                <label for="password">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password">
            </div>

            <div>
                <label for="remember">
                    <input type="checkbox" name="remember" id="remember">
                    Remember Me
                </label>
            </div>

            <button type="submit">Login</button>
        </form>
    </main>
</body>

</html>