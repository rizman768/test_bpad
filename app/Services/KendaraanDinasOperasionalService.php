<?php

namespace App\Services;

use App\Interfaces\KendaraanDinasOperasionalRepositoryInterface;

class KendaraanDinasOperasionalService
{
    public function __construct(
        protected KendaraanDinasOperasionalRepositoryInterface $repository
    ) {}

    public function getAll(int $perPage = 10)
    {
        return $this->repository->getAll($perPage);
    }

    public function getById(int $id)
    {
        return $this->repository->getById($id);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(int $id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }
}
