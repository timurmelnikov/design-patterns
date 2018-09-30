<?php

class AddWorld extends Decorator
{
    public function operation()
    {
        return parent::operation() . ' World';
    }
}