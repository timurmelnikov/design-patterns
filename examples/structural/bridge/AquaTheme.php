<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 17.11.18
 * Time: 10:58
 */

namespace examples\structural\bridge;


class AquaTheme implements Theme
{
    public function getColor()
    {
        return 'Light blue';
    }
}