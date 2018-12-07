<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 07.12.2018
 * Time: 16:37
 */

namespace examples\behavioral\command;


class TurnOff implements Command
{
    protected $bulb;

    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOff();
    }

    public function undo()
    {
        $this->bulb->turnOn();
    }

    public function redo()
    {
        $this->execute();
    }
}