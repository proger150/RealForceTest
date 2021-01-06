<?php

namespace App\Tests;


use App\Entity\Employee;
use PHPUnit\Framework\TestCase;

abstract class BaseTestCase extends TestCase
{
    protected $bobEmployee;
    protected $aliceEmployee;
    protected $charlieEmployee;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->bobEmployee = new Employee(52, 0, true, 4000);
        $this->aliceEmployee = new Employee(26, 2, false, 6000);
        $this->charlieEmployee = new Employee(26, 3, true, 5000);
    }
}
