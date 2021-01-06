<?php

namespace App\Tests\Calculator;


use App\Calculator\DeductionsCalculator;
use App\Tests\BaseTestCase;

class DeductionsCalculatorTest extends BaseTestCase
{
    public function testForAlice()
    {
        $calculator = new DeductionsCalculator($this->aliceEmployee);
        $this->assertEquals(0, $calculator->calculate());
    }

    public function testForBob()
    {
        $calculator = new DeductionsCalculator($this->bobEmployee);
        $this->assertEquals(500, $calculator->calculate());
    }

    public function testForCharlie()
    {
        $calculator = new DeductionsCalculator($this->charlieEmployee);
        $this->assertEquals(500, $calculator->calculate());
    }
}