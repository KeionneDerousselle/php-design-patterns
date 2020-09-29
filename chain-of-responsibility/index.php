<?php

use App\Alarm;
use App\HomeStatus;
use App\Lights;
use App\Locks;

require "vendor/autoload.php";

$locks = new Locks();
$lights = new Lights();
$alarm = new Alarm();

$locks->succeedWith($lights);
$lights->succeedWith($alarm);


$locks->check(new HomeStatus);
