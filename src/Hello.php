<?php

namespace MendesAlexandre\PixSicredi;

class Hello
{
    protected $name;

    public function __construct($name = 'Alexandre')
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        return 'Hello ' . $this->name;
    }
}
