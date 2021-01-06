<?php

namespace App\Tests\Calculator;


use App\Calculator\TaxesCalculator;
use App\Tests\BaseTestCase;

class TaxesCalculatorTest extends BaseTestCase
{
    public function testForBob()
    {
        $taxesCalculator = new TaxesCalculator($this->bobEmployee);
        $this->assertEquals(20, $taxesCalculator->calculate());
    }

    public function testForAlice()
    {
        $taxesCalculator = new TaxesCalculator($this->aliceEmployee);
        $this->assertEquals(20, $taxesCalculator->calculate());
    }

    public function testForCharlie()
    {
        $taxesCalculator = new TaxesCalculator($this->charlieEmployee);
        $this->assertEquals(18, $taxesCalculator->calculate());
    }
}