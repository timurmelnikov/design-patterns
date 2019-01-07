<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 07.01.19
 * Time: 11:29
 */

namespace examples\behavioral\visitor;


class Monkey implements Animal
{
    public function shout()
    {
        echo 'Ooh oo aa aa!';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitMonkey($this);
    }
}