<?php

namespace App;

class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->doorsLocked) {
            throw new \Exception('The doors are not locked!');
        }

        $this->next($home);
    }
}
