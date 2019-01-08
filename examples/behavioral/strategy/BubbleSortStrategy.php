<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 08.01.2019
 * Time: 13:21
 */

namespace examples\behavioral\strategy;


class BubbleSortStrategy implements SortStrategy
{
    public function sort(array $dataset): array
    {
        echo "Sorting using bubble sort";

        // Do sorting
        return $dataset;
    }
}