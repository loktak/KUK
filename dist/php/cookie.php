<?php

require_once "init.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('не пост');
}

setcookie('use-cookie', 'got-it', strtotime("+30 days"), '/');