<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 25.10.18
 * Time: 13:42
 */

namespace examples\creational\factory_method;


class Developer implements Interviewer
{

    public function askQuestions(): void
    {
        echo 'Asking about design patterns!';
    }
}