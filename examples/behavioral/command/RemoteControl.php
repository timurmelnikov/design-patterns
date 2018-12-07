<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 07.12.2018
 * Time: 16:38
 */

namespace examples\behavioral\command;


// Invoker
class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}