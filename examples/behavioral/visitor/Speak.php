<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 07.01.19
 * Time: 11:31
 */

namespace examples\behavioral\visitor;


class Speak implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey)
    {
        $monkey->shout();
    }

    public function visitLion(Lion $lion)
    {
        $lion->roar();
    }

    public function visitDolphin(Dolphin $dolphin)
    {
        $dolphin->speak();
    }
}