<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 29.11.18
 * Time: 15:34
 */

namespace examples\behavioral\chain_of_responsibility;


class Bank extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}