<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 25.10.18
 * Time: 13:50
 */

namespace examples\creational\factory_method;


class DevelopmentManager extends HiringManager
{

    public function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}