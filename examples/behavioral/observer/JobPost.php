<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 02.01.2019
 * Time: 10:25
 */

namespace examples\behavioral\observer;


class JobPost
{
    protected $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}