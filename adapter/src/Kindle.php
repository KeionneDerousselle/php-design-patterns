<?php
namespace App;

use App\EReaderInterface;

class Kindle implements EReaderInterface
{
    public function turnOn()
    {
        var_dump('turn the Kindle on');
    }

    public function pressNextButton()
    {
        var_dump(('press the next button on the Kindle'));
    }
}
