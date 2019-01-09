<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 09.01.2019
 * Time: 9:50
 */

namespace examples\behavioral\state;


class UpperCase implements WritingState
{
    public function write(string $words)
    {
        echo strtoupper($words);
    }
}