<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 23.11.18
 * Time: 11:04
 */

namespace examples\structural\proxy;


class LabDoor implements Door
{
    public function open()
    {
        echo "Opening lab door";
    }

    public function close()
    {
        echo "Closing the lab door";
    }
}