<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 07.01.19
 * Time: 11:29
 */

namespace examples\behavioral\visitor;


// Посетитель
interface AnimalOperation
{
    public function visitMonkey(Monkey $monkey);
    public function visitLion(Lion $lion);
    public function visitDolphin(Dolphin $dolphin);
}