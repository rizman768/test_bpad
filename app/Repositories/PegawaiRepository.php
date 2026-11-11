<?php

namespace App\Repositories;

use App\Models\Pegawai;
use App\Interfaces\PegawaiRepositoryInterface;

class PegawaiRepository implements PegawaiRepositoryInterface
{
   public function getAll(int $perPage = 10)
    {
        return Pegawai::with([
            'perangkatDaerah',
            'kendaraanDinas'
        ])
            ->orderBy('id', 'desc')
            ->paginate($perPage);
    }

    public function getById(int $id)
    {
        return Pegawai::with([
            'perangkatDaerah',
            'kendaraanDinas'
        ])->findOrFail($id);
    }

    public function create(array $data)
    {
        return Pegawai::create($data);
    }

    public function update(int $id, array $data)
    {
        $pegawai = $this->getById($id);

        $pegawai->update($data);

        return $pegawai->refresh();
    }

    public function delete(int $id)
    {
        $pegawai = $this->getById($id);

        return $pegawai->delete();
    }
}
