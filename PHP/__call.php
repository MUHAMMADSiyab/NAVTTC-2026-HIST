<?php

class Person
{
    private array $details = [];


    public function __call(string $method, array $args)
    {
        if (str_starts_with($method, "set")) {
            $property = strtolower(substr($method, 3));
            $this->details[$property] = $args[0];

            return $this;
        }
    }


    public function introduce()
    {
        foreach ($this->details as $key => $value) {
            echo "{$key}: {$value} <br>";
        }
    }
}

$person = new Person();

$person->setName("Ammar")
    ->setEmail("ammar@gmail.com")
    ->setAddress("Ayesha manzil")
    ->setPhone("021-92932932")
    ->setAge(25);


$person->introduce();
