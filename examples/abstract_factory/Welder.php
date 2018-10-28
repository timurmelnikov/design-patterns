<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 28.10.18
 * Time: 15:10
 */

namespace examples\abstract_factory;


class Welder implements DoorFittingExpert
{

    public function getDescription()
    {
        echo 'I can only fit iron doors';
    }
}