<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 08.01.2019
 * Time: 13:23
 */

namespace examples\behavioral\strategy;


class Sorter
{
    protected $sorter;

    public function __construct(SortStrategy $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort(array $dataset): array
    {
        return $this->sorter->sort($dataset);
    }
}