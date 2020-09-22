<?php
require 'vendor/autoload.php';

use App\Book;
use App\Kindle;
use App\KindleAdapter;
use App\BookInterface;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

 echo (new Person)->read(new Book)."\n";
 echo (new Person)->read(new KindleAdapter(new Kindle));
