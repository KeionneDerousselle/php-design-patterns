<?php
namespace App;

use App\Sub;

class VeggieSub extends Sub
{
    public function addPrimaryToppings()
    {
        var_dump('Add some veggies');
        return $this;
    }
}
