<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 25.10.18
 * Time: 13:45
 */

namespace examples\factory_method;


class CommunityExecutive implements Interviewer
{

    public function askQuestions(): void
    {
        echo 'Asking about community building';
    }
}