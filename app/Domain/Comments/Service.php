<?php

namespace Leantime\Domain\Comments;

use Leantime\Domain\Comments\Repository;

class Service
{
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function getComments($param1)
    {
        return $this->repository->getComments($param1);
    }

    public function addComment($param1, $param2)
    {
        return $this->repository->addComment($param1, $param2);
    }

    public function updateComment($param1, $param2)
    {
        return $this->repository->updateComment($param1, $param2);
    }

    public function deleteComment($param1)
    {
        return $this->repository->deleteComment($param1);
    }
}
