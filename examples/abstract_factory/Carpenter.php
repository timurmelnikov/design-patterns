<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 28.10.18
 * Time: 15:11
 */

namespace examples\abstract_factory;


class Carpenter implements DoorFittingExpert
{

    public function getDescription()
    {
        echo 'I can only fit wooden doors';
    }
}