<?php

namespace App\Calculator;


class TaxesCalculator extends AbstractCalculator implements CalculatorInterface
{
    private $kidsThreshold = 2;
    private $baseTax = 20;
    private $taxDecreaseAmount = 2;

    public function calculate(): float
    {
        if ($this->employee->getKidsCount() > $this->kidsThreshold) {
            return $this->baseTax - $this->taxDecreaseAmount;
        }

        return $this->baseTax;
    }
}
