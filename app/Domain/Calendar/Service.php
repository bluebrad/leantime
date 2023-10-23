<?php

namespace Leantime\Domain\Calendar;

use Leantime\Domain\Calendar\Repository;

class Service
{
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function getEvents($param1, $param2)
    {
        return $this->repository->getEvents($param1, $param2);
    }

    public function addEvent($param1)
    {
        return $this->repository->addEvent($param1);
    }

    public function updateEvent($param1, $param2)
    {
        return $this->repository->updateEvent($param1, $param2);
    }

    public function deleteEvent($param1)
    {
        return $this->repository->deleteEvent($param1);
    }
}
