<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 07.01.19
 * Time: 11:28
 */

namespace examples\behavioral\visitor;


// Место посещения
interface Animal
{
    public function accept(AnimalOperation $operation);
}