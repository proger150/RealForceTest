<?php

namespace App\Calculator;


class ExtraChargeCalculator extends AbstractCalculator implements CalculatorInterface
{
    private $thresholdAge = 50;
    private $extraChargePercent = 7;

    public function calculate(): float
    {
        if ($this->employee->getAge() > $this->thresholdAge) {
            return $this->extraChargePercent;
        }

        return 0;
    }
}