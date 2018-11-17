<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 17.11.18
 * Time: 10:58
 */

namespace examples\structural\bridge;


class LightTheme implements Theme
{
    public function getColor()
    {
        return 'Off white';
    }
}