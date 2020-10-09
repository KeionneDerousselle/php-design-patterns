<?php
namespace App;

use App\Subject;
use InvalidArgumentException;

class Login implements Subject
{
    protected $observers = [];

    protected function attachObservers($observable)
    {
        foreach ($observable as $observer) {
            if (!$observer instanceof Observer) {
                throw new InvalidArgumentException('Must implement the Observer interface!');
            }
            $this->attach($observer);
        }
    }

    public function attach($observable)
    {
        if (is_array($observable)) {
            return $this->attachObservers($observable);
        }

        $this->observers[] = $observable;

        return $this;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }

    public function execute()
    {
        // perform the login
        $this->notify();
    }
}
