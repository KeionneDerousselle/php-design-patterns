<?php
namespace App;

use App\BookInterface;

class Book implements BookInterface
{
    public function open()
    {
        var_dump('opening the book');
    }

    public function turnPage()
    {
        var_dump('Turning the page of the paper book');
    }
}
