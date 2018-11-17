<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 17.11.18
 * Time: 10:57
 */

namespace examples\structural\bridge;


class DarkTheme implements Theme
{
    public function getColor()
    {
        return 'Dark Black';
    }
}