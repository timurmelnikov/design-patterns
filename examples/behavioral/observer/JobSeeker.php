<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 02.01.2019
 * Time: 10:26
 */

namespace examples\behavioral\observer;


class JobSeeker implements Observer
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function onJobPosted(JobPost $job)
    {
        // Do something with the job posting
        echo 'Hi ' . $this->name . '! New job posted: '. $job->getTitle();
    }
}