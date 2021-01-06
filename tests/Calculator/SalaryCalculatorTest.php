<?php

namespace App\Tests\Calculator;


use App\Calculator\DeductionsCalculator;
use App\Calculator\ExtraChargeCalculator;
use App\Calculator\SalaryCalculator;
use App\Calculator\TaxesCalculator;
use App\Tests\BaseTestCase;

class SalaryCalculatorTest extends BaseTestCase
{
    public function testForAlice()
    {
        $salary = (new SalaryCalculator($this->aliceEmployee))
            ->setChargesPercent((new ExtraChargeCalculator($this->aliceEmployee))->calculate())
            ->setTaxesPercent((new TaxesCalculator($this->aliceEmployee))->calculate())
            ->setDeductions((new DeductionsCalculator($this->aliceEmployee))->calculate())
            ->calculate();
        $this->assertEquals(4800, $salary);
    }

    public function testForBob()
    {
        $salary = (new SalaryCalculator($this->bobEmployee))
            ->setChargesPercent((new ExtraChargeCalculator($this->bobEmployee))->calculate())
            ->setTaxesPercent((new TaxesCalculator($this->bobEmployee))->calculate())
            ->setDeductions((new DeductionsCalculator($this->bobEmployee))->calculate())
            ->calculate();
        $this->assertEquals(2924, $salary);
    }

    public function testForCharlie()
    {
        $salary = (new SalaryCalculator($this->charlieEmployee))
            ->setChargesPercent((new ExtraChargeCalculator($this->charlieEmployee))->calculate())
            ->setTaxesPercent((new TaxesCalculator($this->charlieEmployee))->calculate())
            ->setDeductions((new DeductionsCalculator($this->charlieEmployee))->calculate())
            ->calculate();
        $this->assertEquals(3600, $salary);
    }
}