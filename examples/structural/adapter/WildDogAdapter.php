<?php

namespace examples\structural\adapter;

class WildDogAdapter implements Lion
{
    protected $dog;

    public function __construct(WildDog $dog)
    {
        $this->dog = $dog;
    }

    public function roar(): void
    {
        $this->dog->bark();
    }
}
