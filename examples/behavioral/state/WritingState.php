<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 09.01.2019
 * Time: 9:49
 */

namespace examples\behavioral\state;


interface WritingState
{
    public function write(string $words);
}