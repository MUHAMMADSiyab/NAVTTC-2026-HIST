<?php

require_once "Auth.php";

$auth = new Auth();
$auth->requiresAuth();

$user = $auth->user();

?>


<h1>Welcome, <?php echo htmlspecialchars($user['name']) ?></h1>

<p><a href="logout.php">Logout</a></p>