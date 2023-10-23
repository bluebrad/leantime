<?php

namespace Leantime\Domain\Canvas;

use Leantime\Domain\Canvas\Repository;

class Service
{
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function getCanvasItem($id)
    {
        return $this->repository->getCanvasItem($id);
    }

    public function getAllCanvasItems($type)
    {
        return $this->repository->getAllCanvasItems($type);
    }

    public function addCanvasItem($data)
    {
        return $this->repository->addCanvasItem($data);
    }

    public function updateCanvasItem($id, $data)
    {
        return $this->repository->updateCanvasItem($id, $data);
    }

    public function deleteCanvasItem($id)
    {
        return $this->repository->deleteCanvasItem($id);
    }
}
