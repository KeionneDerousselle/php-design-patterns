<?php
namespace App;

use App\HomeStatus;

abstract class HomeChecker
{
    protected $successor;

    abstract public function check(HomeStatus $home);

    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}
