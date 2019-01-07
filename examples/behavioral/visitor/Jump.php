<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 07.01.19
 * Time: 11:33
 */

namespace examples\behavioral\visitor;


class Jump implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey)
    {
        echo 'Jumped 20 feet high! on to the tree!';
    }

    public function visitLion(Lion $lion)
    {
        echo 'Jumped 7 feet! Back on the ground!';
    }

    public function visitDolphin(Dolphin $dolphin)
    {
        echo 'Walked on water a little and disappeared';
    }
}