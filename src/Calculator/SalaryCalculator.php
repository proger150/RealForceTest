<?php

namespace App\Calculator;


class SalaryCalculator extends AbstractCalculator implements CalculatorInterface
{
    protected $deductions = 0;
    protected $chargesPercent = 0;
    protected $taxesPercent = 0;


    public function setDeductions(float $amount)
    {
        $this->deductions = $amount;
        return $this;
    }

    public function setChargesPercent(float $charges)
    {
        $this->chargesPercent = $charges;
        return $this;
    }

    public function setTaxesPercent(float $tax)
    {
        $this->taxesPercent = $tax;
        return $this;
    }

    protected function calculateCharges(): float
    {
        return $this->employee->getBaseSalary() / 100 * $this->chargesPercent;
    }

    protected function calculateTaxes(float $amount): float
    {
        return $amount / 100 * $this->taxesPercent;
    }

    public function calculate(): float
    {
        $totalSalary = $this->employee->getBaseSalary() + $this->calculateCharges();
        $taxes = $this->calculateTaxes($totalSalary);
        return $totalSalary - $taxes - $this->deductions;
    }
}
