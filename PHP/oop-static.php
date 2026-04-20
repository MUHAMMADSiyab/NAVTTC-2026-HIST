<?php

class Counter
{
    public static $counter = 0;

    public static function increment()
    {
        self::$counter++;
    }
}

// We don't need an instance/object of class Counter to access $counter
// static properties/methods can be accessed directly via class.

Counter::increment();
Counter::increment();
Counter::increment();
echo Counter::$counter;
