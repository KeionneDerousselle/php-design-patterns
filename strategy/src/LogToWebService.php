<?php

namespace App;

class LogToWebService implements Logger
{
    public function log($data)
    {
        var_dump('Log the data to a web service');
    }
}
