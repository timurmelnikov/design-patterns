<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 28.10.18
 * Time: 15:06
 */

namespace examples\creational\abstract_factory;


class IronDoor implements Door
{
    public function getDescription(): void
    {
        echo 'I am an iron door';
    }
}