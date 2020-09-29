<?php
namespace App;

use App\Sub;

class TurkeySub extends Sub
{
    public function addPrimaryToppings()
    {
        var_dump('Add some turkey');
        return $this;
    }
}
