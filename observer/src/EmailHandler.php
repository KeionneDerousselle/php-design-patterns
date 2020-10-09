<?php

namespace App;

use App\Observer;

class EmailHandler implements Observer
{
    public function handle()
    {
        var_dump('Send an email!');
    }
}
