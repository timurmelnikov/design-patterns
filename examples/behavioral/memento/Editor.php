<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 20.12.2018
 * Time: 13:42
 */

namespace examples\behavioral\memento;


class Editor
{
    protected $content = '';

    public function type(string $words)
    {
        $this->content = $this->content . ' ' . $words;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function save()
    {
        return new EditorMemento($this->content);
    }

    public function restore(EditorMemento $memento)
    {
        $this->content = $memento->getContent();
    }
}