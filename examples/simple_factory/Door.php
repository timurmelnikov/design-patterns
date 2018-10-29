<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 25.10.18
 * Time: 12:44
 */

namespace examples\simple_factory;


interface Door
{
    public function getWidth(): float;

    public function getHeight(): float;
}