<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 02.01.2019
 * Time: 10:26
 */

namespace examples\behavioral\observer;


class JobPostings implements Observable
{
    protected $observers = [];

    protected function notify(JobPost $jobPosting)
    {
        foreach ($this->observers as $observer) {
            $observer->onJobPosted($jobPosting);
        }
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function addJob(JobPost $jobPosting)
    {
        $this->notify($jobPosting);
    }
}