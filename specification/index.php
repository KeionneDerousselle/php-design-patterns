<?php

require "vendor/autoload.php";

use App\Customer;
use App\CustomerIsGold;

$spec = new CustomerIsGold();
$spec->isSatisfiedBy(new Customer());