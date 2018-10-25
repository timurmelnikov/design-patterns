<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 25.10.18
 * Time: 13:47
 */

namespace examples\factory_method;


abstract class HiringManager
{
    // Фабричный метод
    abstract public function makeInterviewer(): Interviewer;


    public function takeInterview(): void
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}