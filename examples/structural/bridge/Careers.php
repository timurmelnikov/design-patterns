<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 17.11.18
 * Time: 10:56
 */

namespace examples\structural\bridge;


class Careers implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "Careers page in " . $this->theme->getColor();
    }

}