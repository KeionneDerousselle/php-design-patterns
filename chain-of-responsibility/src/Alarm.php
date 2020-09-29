<?php

namespace App;

class Alarm extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->alarmOn) {
            throw new \Exception('The alarm is not on!');
        }

        $this->next($home);
    }
}
