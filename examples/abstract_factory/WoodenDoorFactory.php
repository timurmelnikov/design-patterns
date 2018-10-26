<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 28.10.18
 * Time: 15:13
 */

namespace examples\abstract_factory;


class WoodenDoorFactory implements DoorFactory
{

    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }
}