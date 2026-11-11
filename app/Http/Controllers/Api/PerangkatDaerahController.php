<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\PerangkatDaerahService;
use App\Http\Requests\PerangkatDaerah\StorePerangkatDaerahRequest;
use App\Http\Requests\PerangkatDaerah\UpdatePerangkatDaerahRequest;
use App\Http\Resources\PerangkatDaerahResource;
use Illuminate\Http\Request;
use App\Http\Resources\KendaraanDinasOperasionalResource;

class PerangkatDaerahController extends Controller
{
    public function __construct(
        protected PerangkatDaerahService $service
    ) {}

    public function index(Request $request)
    {
        $perPage = min(
            max($request->integer('per_page', 10), 1),
            100
        );

        $data = $this->service->getAll($perPage);

        return PerangkatDaerahResource::collection($data)
            ->additional([
                'success' => true,
                'message' => 'Data perangkat daerah berhasil diambil',
            ]);
    }

    public function show(int $perangkat_daerah)
    {
        $data = $this->service->getById($perangkat_daerah);

        return (new PerangkatDaerahResource($data))
            ->additional([
                'success' => true,
                'message' => 'Detail perangkat daerah berhasil diambil',
            ]);
    }

    public function store(StorePerangkatDaerahRequest $request)
    {
        $data = $this->service->create($request->validated());

        return (new PerangkatDaerahResource($data))
            ->additional([
                'success' => true,
                'message' => 'Perangkat daerah berhasil ditambahkan',
            ])
            ->response()
            ->setStatusCode(201);
    }

    public function update(
        UpdatePerangkatDaerahRequest $request,
        int $perangkat_daerah
    ) {
        $data = $this->service->update(
            $perangkat_daerah,
            $request->validated()
        );

        return (new PerangkatDaerahResource($data))
            ->additional([
                'success' => true,
                'message' => 'Perangkat daerah berhasil diperbarui',
            ]);
    }

    public function destroy(int $perangkat_daerah)
    {
        $this->service->delete($perangkat_daerah);

        return response()->json([
            'success' => true,
            'message' => 'Perangkat daerah berhasil dihapus',
        ]);
    }

    public function kendaraan(Request $request, int $perangkat_daerah)
    {
        $perPage = min(
            max($request->integer('per_page', 10), 1),
            100
        );

        $data = $this->service->getKendaraan(
            $perangkat_daerah,
            $perPage
        );

        return KendaraanDinasOperasionalResource::collection($data)
            ->additional([
                'success' => true,
                'message' => 'Data kendaraan dinas perangkat daerah berhasil diambil',
            ]);
    }
}
