<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 07.12.2018
 * Time: 16:36
 */

namespace examples\behavioral\command;


interface Command
{
    public function execute();
    public function undo();
    public function redo();
}
