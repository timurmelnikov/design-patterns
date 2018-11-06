<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 25.10.18
 * Time: 13:51
 */

namespace examples\creational\factory_method;


class MarketingManager extends HiringManager
{

    public function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}