<?php

namespace App\Calculator;



class DeductionsCalculator extends AbstractCalculator implements CalculatorInterface
{

    private const CAR_DEDUCTION = 500;

    public function calculate(): float
    {
        if ($this->employee->hasCar()) {
            return self::CAR_DEDUCTION;
        }

        return 0;
    }
}
