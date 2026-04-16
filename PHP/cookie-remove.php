<?php
$expiry = time() - 100;
setcookie("remembered_user", "", $expiry, '/');
