<?php

namespace examples\structural\adapter;

class Hunter
{
    public function hunt(Lion $lion): void
    {
        var_dump($lion);
    }

}