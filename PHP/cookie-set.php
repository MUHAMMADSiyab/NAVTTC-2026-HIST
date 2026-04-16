<?php

$username = "ammar321";
$expiry = time() + (30 * 24 * 60 * 60);


setcookie("remembered_user", $username, $expiry, "/");
