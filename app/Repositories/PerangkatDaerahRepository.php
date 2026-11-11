<?php

namespace App\Repositories;

use App\Models\PerangkatDaerah;
use App\Interfaces\PerangkatDaerahRepositoryInterface;

class PerangkatDaerahRepository implements PerangkatDaerahRepositoryInterface
{
    public function getAll(int $perPage = 10)
    {
        return PerangkatDaerah::withCount('pegawai')
            ->orderBy('id', 'desc')
            ->paginate($perPage);
    }

    public function getById(int $id)
    {
        return PerangkatDaerah::withCount('pegawai')
            ->findOrFail($id);
    }

    public function create(array $data)
    {
        return PerangkatDaerah::create($data);
    }

    public function update(int $id, array $data)
    {
        $perangkatDaerah = $this->getById($id);

        $perangkatDaerah->update($data);

        return $perangkatDaerah->refresh();
    }

    public function delete(int $id)
    {
        $perangkatDaerah = $this->getById($id);

        return $perangkatDaerah->delete();
    }
    
    public function getKendaraan(int $id, int $perPage = 10)
    {
        $perangkatDaerah = PerangkatDaerah::findOrFail($id);

        return \App\Models\KendaraanDinasOperasional::query()
            ->whereHas('pegawai', function ($query) use ($perangkatDaerah) {
                $query->where(
                    'perangkat_daerah_id',
                    $perangkatDaerah->id
                );
            })
            ->with('pegawai')
            ->orderBy('id', 'desc')
            ->paginate($perPage);
    }
}
