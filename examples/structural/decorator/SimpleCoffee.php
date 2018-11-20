<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 20.11.18
 * Time: 13:23
 */

namespace examples\structural\decorator;


class SimpleCoffee implements Coffee
{
    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        return 'Simple coffee';
    }
}