<?php

// Parent
class Student
{
    /**
     * Public           ->      (Available everywhere)
     * Protected        ->      (Available in child classes only)
     * Private          ->      (Available in the original class only)
     */

    public $name;
    protected $studentId;
    private $feeBalance = 5000;

    public function __construct($name, $studentId)
    {
        $this->name = $name;
        $this->studentId = $studentId;
    }

    // getters
    public function getStudentId()
    {
        return $this->studentId;
    }

    public function getFeeBalance()
    {
        return $this->feeBalance;
    }

    // setters
    public function setFeeBalance($balance)
    {
        $this->feeBalance += $balance;
    }
}

// Child
class GraduationStudent extends Student
{
    public $cgpa;

    public function __construct($name, $studentId)
    {
        parent::__construct($name, $studentId); // call the parent's constructor first 
        // echo $this->feeBalance;
    }
}


$g_student = new GraduationStudent("John Doe", "98213982");
$g_student->setFeeBalance(2500);

echo $g_student->getFeeBalance();
