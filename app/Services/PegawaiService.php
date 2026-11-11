<?php

namespace App\Services;

use App\Interfaces\PegawaiRepositoryInterface;

class PegawaiService
{
    protected PegawaiRepositoryInterface $pegawaiRepository;

    public function __construct(
        PegawaiRepositoryInterface $pegawaiRepository
    ) {
        $this->pegawaiRepository = $pegawaiRepository;
    }

    public function getAll(int $perPage = 10)
    {
        return $this->pegawaiRepository->getAll($perPage);
    }

    public function getById(int $id)
    {
        return $this->pegawaiRepository->getById($id);
    }

    public function create(array $data)
    {
        return $this->pegawaiRepository->create($data);
    }

    public function update(int $id, array $data)
    {
        return $this->pegawaiRepository->update($id, $data);
    }

    public function delete(int $id)
    {
        return $this->pegawaiRepository->delete($id);
    }
}
