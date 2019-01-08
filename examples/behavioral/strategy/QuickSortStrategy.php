<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 08.01.2019
 * Time: 13:22
 */

namespace examples\behavioral\strategy;


class QuickSortStrategy implements SortStrategy
{
    public function sort(array $dataset): array
    {
        echo "Sorting using quick sort";

        // Do sorting
        return $dataset;
    }
}