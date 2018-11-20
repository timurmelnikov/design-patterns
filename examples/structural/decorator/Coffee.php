<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 20.11.18
 * Time: 13:22
 */

namespace examples\structural\decorator;


interface Coffee
{
    public function getCost();

    public function getDescription();
}