<?php

namespace App\Entity;


class Employee
{
    private $age;
    private $kidsCount;
    private $hasCar;
    private $baseSalary;

    public function __construct(int $age, int $kidsCount, bool $hasCar, int $baseSalary)
    {
        $this->age = $age;
        $this->kidsCount = $kidsCount;
        $this->hasCar = $hasCar;
        $this->baseSalary = $baseSalary;
    }

    public function getKidsCount(): int
    {
        return $this->kidsCount;
    }

    public function getBaseSalary(): int
    {
        return $this->baseSalary;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function hasCar(): bool
    {
        return $this->hasCar;
    }
}
