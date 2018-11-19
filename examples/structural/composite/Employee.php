<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 19.11.18
 * Time: 13:37
 */

namespace examples\structural\composite;


interface Employee
{
    public function __construct(string $name, float $salary);
    public function getName(): string;
    public function setSalary(float $salary);
    public function getSalary(): float;
    public function getRoles(): array;
}