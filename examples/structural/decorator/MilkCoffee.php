<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 20.11.18
 * Time: 13:23
 */

namespace examples\structural\decorator;


class MilkCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', milk';
    }
}