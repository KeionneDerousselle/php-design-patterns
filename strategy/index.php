<?php
require "vendor/autoload.php";
use App\Logger;
use App\LogToDatabase;

class App
{
    public function log($data, Logger $logger)
    {
        $logger->log($data);
    }
}

$app = new App;
$app->log('Some data', new LogToDatabase());
