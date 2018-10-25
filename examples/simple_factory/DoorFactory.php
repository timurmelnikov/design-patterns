<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 25.10.18
 * Time: 12:50
 */

namespace examples\simple_factory;


class DoorFactory
{
    public static function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);
    }


}