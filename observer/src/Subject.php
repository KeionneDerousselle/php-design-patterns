<?php

namespace App;

interface Subject
{ // Publisher
    public function attach($observable);

    public function detach($observer);

    public function notify();
}
