<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 19.11.18
 * Time: 13:39
 */

namespace examples\structural\composite;


class Organization
{
    protected $employees;

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function getNetSalaries(): float
    {
        $netSalary = 0;

        foreach ($this->employees as $employee) {
            $netSalary += $employee->getSalary();
        }

        return $netSalary;
    }
}