<?php

namespace App\Services;

use App\Interfaces\PerangkatDaerahRepositoryInterface;

class PerangkatDaerahService
{
    public function __construct(
        protected PerangkatDaerahRepositoryInterface $repository
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

    public function getKendaraan(int $id, int $perPage = 10)
    {
        return $this->repository->getKendaraan($id, $perPage);
    }
}
