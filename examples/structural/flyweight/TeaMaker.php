<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 22.11.18
 * Time: 12:33
 */

namespace examples\structural\flyweight;


// Действует как фабрика и экономит чай
class TeaMaker
{
    protected $availableTea = [];

    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new KarakTea();
        }

        return $this->availableTea[$preference];
    }
}