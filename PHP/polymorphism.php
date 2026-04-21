<?php

/**
 * Polymorphism = Many Forms
 * 
 * Poly = Many
 * Morph = Forms
 * 
 */

class Animal
{
    public function speak()
    {
        echo "Animal sound";
    }
}

class Cat extends Animal
{
    public function speak()
    {
        echo "Meow";
    }
}


class Dog extends Animal
{
    public function speak()
    {
        echo "Woof";
    }
}


class Bird extends Animal
{
    public function speak()
    {
        echo "Tweet";
    }
}

// $cat = new Cat();
// $dog = new Dog();
// $bird = new Bird();

// $cat->speak();
// $dog->speak();
// $bird->speak();

// $animals = [new Cat, new Dog, new Bird];

// foreach ($animals as $animal) {
//     $animal->speak();
// }







class Payment
{
    public function pay(int $amount)
    {
        echo "{$amount} paid";
    }
}

class Bank extends Payment
{
    public function pay(int $amount)
    {
        echo "{$amount} paid via bank";
    }
}


class EasyPaisa extends Payment
{
    public function pay(int $amount)
    {
        echo "{$amount} paid via EasyPaisa";
    }
}

class CreditCard extends Payment
{
    public function pay(int $amount)
    {
        echo "{$amount} paid via Credit Card";
    }
}


$payments = [new Bank, new CreditCard, new EasyPaisa];

foreach ($payments as $payment) {
    $payment->pay(4500);
}
