<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 09.01.2019
 * Time: 9:51
 */

namespace examples\behavioral\state;


class DefaultCase implements WritingState
{
    public function write(string $words)
    {
        echo $words;
    }
}