<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 20.12.2018
 * Time: 13:41
 */

namespace examples\behavioral\memento;


class EditorMemento
{
    protected $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }
}