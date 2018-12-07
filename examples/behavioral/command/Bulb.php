<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 07.12.2018
 * Time: 16:36
 */

namespace examples\behavioral\command;


// Receiver
class Bulb
{
    public function turnOn()
    {
        echo "Bulb has been lit";
    }

    public function turnOff()
    {
        echo "Darkness!";
    }
}