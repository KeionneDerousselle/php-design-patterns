<?php

namespace App;

class Customer
{
    protected $plan;

    public function __construct($plan)
    {
        $this->plan = $plan;
    }

    public function plan()
    {
        return $this->plan;
    }
}
