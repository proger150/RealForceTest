<?php

namespace App\Command;


use App\Calculator\DeductionsCalculator;
use App\Calculator\ExtraChargeCalculator;
use App\Calculator\SalaryCalculator;
use App\Calculator\TaxesCalculator;
use App\Entity\Employee;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateCalculatorCommand extends Command
{
    protected static $defaultName = 'app:calculate-salary';

    protected function configure()
    {
        parent::configure();
        $this->addArgument("age", InputArgument::REQUIRED, "The age of employee");
        $this->addArgument("salary", InputArgument::REQUIRED, "The base salary amount of employee");
        $this->addArgument("childs", InputArgument::REQUIRED, "Count of employee childs");
        $this->addArgument("hasCar", InputArgument::REQUIRED, "Company car usage");

        $this->setDescription("Calculates user salary");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $age = $input->getArgument("age");
        $baseSalary = $input->getArgument("salary");
        $childs = $input->getArgument("childs");
        $car = $input->getArgument("hasCar");
        $output->writeln("Age: " . $age);
        $output->writeln("Has car: " . $car);
        $output->writeln("Base salary: " . $baseSalary);
        $output->writeln("Childs count: " . $childs);

        $employee = new Employee($age, $childs, $car === 'yes', $baseSalary);
        $salary = (new SalaryCalculator($employee))
            ->setChargesPercent((new ExtraChargeCalculator($employee))->calculate())
            ->setTaxesPercent((new TaxesCalculator($employee))->calculate())
            ->setDeductions((new DeductionsCalculator($employee))->calculate())
            ->calculate();

        $output->writeln("Salary amount is:" . $salary);


        return Command::SUCCESS;
    }
}
