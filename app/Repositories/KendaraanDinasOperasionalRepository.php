<?php

namespace App\Repositories;

use App\Models\KendaraanDinasOperasional;
use App\Interfaces\KendaraanDinasOperasionalRepositoryInterface;

class KendaraanDinasOperasionalRepository implements KendaraanDinasOperasionalRepositoryInterface
{
    public function getAll(int $perPage = 10)
    {
        return KendaraanDinasOperasional::with('pegawai')
            ->orderBy('id', 'desc')
            ->paginate($perPage);
    }

    public function getById(int $id)
    {
        return KendaraanDinasOperasional::with('pegawai')
            ->findOrFail($id);
    }

    public function create(array $data)
    {
        return KendaraanDinasOperasional::create($data);
    }

    public function update(int $id, array $data)
    {
        $kendaraan = $this->getById($id);

        $kendaraan->update($data);

        return $kendaraan->refresh();
    }

    public function delete(int $id)
    {
        $kendaraan = $this->getById($id);

        return $kendaraan->delete();
    }
}
