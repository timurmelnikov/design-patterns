<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 08.01.2019
 * Time: 13:21
 */

namespace examples\behavioral\strategy;


interface SortStrategy
{
    public function sort(array $dataset): array;
}