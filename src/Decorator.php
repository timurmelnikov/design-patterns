<?php
/**
 * Паттерн Декоратор
 */

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




