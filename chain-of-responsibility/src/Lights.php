<?php

namespace App;

class Lights extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->lightsOff) {
            throw new \Exception('The lights are not off!');
        }

        $this->next($home);
    }
}
