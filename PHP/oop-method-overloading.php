<?php

class Calculator
{
    public function __call(string $method, array $args)
    {
        if ($method === 'add') {
            if (count($args) === 2) {
                return $args[0] + $args[1];
            } else if (count($args) === 3) {
                return $args[0] + $args[1] + $args[2];
            }
        }
    }
}

$calculator = new Calculator();

echo $calculator->add(23, 5);
echo $calculator->add(23, 5, 8);
