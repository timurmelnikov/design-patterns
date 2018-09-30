<?php

class AddStrong extends Decorator
{
    public function operation()
    {
        return ' <strong>' . parent::operation() . '</strong>';
    }
}