<?php

namespace App\Interfaces;

interface PerangkatDaerahRepositoryInterface
{
    public function getAll(int $perPage = 10);

    public function getById(int $id);

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);
    
    public function getKendaraan(int $id, int $perPage = 10);
}
