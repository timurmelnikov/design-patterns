<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 29.11.18
 * Time: 15:35
 */

namespace examples\behavioral\chain_of_responsibility;


class Bitcoin extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}