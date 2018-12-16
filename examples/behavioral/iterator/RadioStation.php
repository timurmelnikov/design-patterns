<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 16.12.18
 * Time: 19:46
 */

namespace examples\behavioral\iterator;


class RadioStation
{
    protected $frequency;

    public function __construct(float $frequency)
    {
        $this->frequency = $frequency;
    }

    public function getFrequency(): float
    {
        return $this->frequency;
    }
}