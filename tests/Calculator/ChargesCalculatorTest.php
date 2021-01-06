<?php

namespace App\Tests\Calculator;


use App\Calculator\ExtraChargeCalculator;
use App\Tests\BaseTestCase;

class ChargesCalculatorTest extends BaseTestCase
{
    public function testForAlice()
    {
        $calculator = new ExtraChargeCalculator($this->aliceEmployee);
        $this->assertEquals(0, $calculator->calculate());
    }

    public function testForBob()
    {
        $calculator = new ExtraChargeCalculator($this->bobEmployee);
        $this->assertEquals(7, $calculator->calculate());
    }

    public function testForCharlie()
    {
        $calculator = new ExtraChargeCalculator($this->charlieEmployee);
        $this->assertEquals(0, $calculator->calculate());
    }
}