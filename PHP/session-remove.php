<?php

session_start();

// session_destroy(); // removes all the sessions

unset($_SESSION['cart']); // remove specific item
