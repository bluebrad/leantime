<?php

namespace Leantime\Domain\Audit;

use Leantime\Domain\Audit\Repository;

class Service
{
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function getMethod1($param1, $param2)
    {
        return $this->repository->getMethod1($param1, $param2);
    }

    public function getMethod2($param1)
    {
        return $this->repository->getMethod2($param1);
    }

    public function repositoryMethod3($param1, $param2, $param3)
    {
        return $this->repository->repositoryMethod3($param1, $param2, $param3);
    }

    public function repositoryMethod4($param1, $param2)
    {
        return $this->repository->repositoryMethod4($param1, $param2);
    }

    public function repositoryMethod5($param1, $param2, $param3)
    {
        return $this->repository->repositoryMethod5($param1, $param2, $param3);
    }

    public function repositoryMethod6($param1)
    {
        return $this->repository->repositoryMethod6($param1);
    }

    public function repositoryMethod7($param1, $param2)
    {
        return $this->repository->repositoryMethod7($param1, $param2);
    }

    public function repositoryMethod8($param1, $param2, $param3)
    {
        return $this->repository->repositoryMethod8($param1, $param2, $param3);
    }

    public function repositoryMethod9($param1, $param2)
    {
        return $this->repository->repositoryMethod9($param1, $param2);
    }

    public function repositoryMethod10($param1, $param2, $param3)
    {
        return $this->repository->repositoryMethod10($param1, $param2, $param3);
    }
}
