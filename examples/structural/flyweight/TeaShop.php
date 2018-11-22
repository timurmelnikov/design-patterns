<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 22.11.18
 * Time: 12:33
 */

namespace examples\structural\flyweight;


class TeaShop
{
    protected $orders;
    protected $teaMaker;

    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    public function takeOrder(string $teaType, int $table)
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    public function serve()
    {
        foreach ($this->orders as $table => $tea) {
            echo "Serving tea to table# " . $table.'<br/>';
        }
    }
}