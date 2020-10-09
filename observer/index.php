<?php

require "vendor/autoload.php";
use App\Login;
use App\LogHandler;
use App\EmailHandler;

$login = new Login;
$login->attach([
    new LogHandler,
    new EmailHandler
]);
$login->execute();
