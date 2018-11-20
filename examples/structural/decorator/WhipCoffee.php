<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 20.11.18
 * Time: 13:24
 */

namespace examples\structural\decorator;


class WhipCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', whip';
    }
}