<?php

/**
 * ABSTRACTION
 */
abstract class Employee
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract protected function calculateSalary(): float;

    public function paySlip(): void
    {
        echo "{$this->name}: ($) {$this->calculateSalary()} <br>";
    }
}


class FullTimeEmployee extends Employee
{
    private float $monthlySalary;


    public function __construct(string $name, float $monthlySalary)
    {
        parent::__construct($name);

        $this->monthlySalary = $monthlySalary;
    }

    public function calculateSalary(): float
    {
        return $this->monthlySalary;
    }
}




class Freelancer extends Employee
{
    private float $hourlyRate;
    private float $hoursWorked;


    public function __construct(string $name, float $hourlyRate, float $hoursWorked)
    {
        parent::__construct($name);

        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

    public function calculateSalary(): float
    {
        return $this->hourlyRate * $this->hoursWorked;
    }
}

class Intern extends Employee
{
    private float $stipend;


    public function __construct(string $name, float $stipend)
    {
        parent::__construct($name);

        $this->stipend = $stipend;
    }

    public function calculateSalary(): float
    {
        return $this->stipend;
    }
}

$employees = [
    new FullTimeEmployee("John Doe", 4500),
    new Freelancer("Ammar", 10, 140),
    new Intern("Shahwaiz", 1000)
];

foreach ($employees as $employee) {
    $employee->paySlip();
}
