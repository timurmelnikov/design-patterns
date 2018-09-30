<?php
/**
 * Паттерн Декоратор, простой пример на PHP
 */

class Hello
{
    public function operation()
    {
        return 'Hello';
    }
}

class Decorator
{
    protected $object;

    public function __construct($object)
    {
        $this->object = $object;
    }

    protected function getObject()
    {
        return $this->object;
    }

    public function operation()
    {
        return $this->getObject()->operation();
    }
}

class AddWorld extends Decorator
{
    public function operation()
    {
        return parent::operation() . ' World';
    }
}


class AddStrong extends Decorator
{
    public function operation()
    {
        return ' <strong>' . parent::operation() . '</strong>';
    }
}