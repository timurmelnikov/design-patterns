<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 28.10.18
 * Time: 15:05
 */

namespace examples\abstract_factory;


class WoodenDoor implements Door
{

    public function getDescription(): void
    {
        echo 'I am a wooden door';
    }
}