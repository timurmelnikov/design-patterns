<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 17.11.18
 * Time: 10:53
 */

namespace examples\structural\bridge;


interface WebPage
{
    public function __construct(Theme $theme);

    public function getContent();
}