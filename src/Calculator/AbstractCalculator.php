<?php

namespace App\Calculator;


use App\Entity\Employee;

class AbstractCalculator
{
    protected $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }
}