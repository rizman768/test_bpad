<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\KendaraanDinasOperasionalService;
use App\Http\Requests\KendaraanDinasOperasional\StoreKendaraanDinasOperasionalRequest;
use App\Http\Requests\KendaraanDinasOperasional\UpdateKendaraanDinasOperasionalRequest;
use App\Http\Resources\KendaraanDinasOperasionalResource;
use Illuminate\Http\Request;

class KendaraanDinasOperasionalController extends Controller
{
    public function __construct(
        protected KendaraanDinasOperasionalService $service
    ) {}

    public function index(Request $request)
    {
        $perPage = min(
            max($request->integer('per_page', 10), 1),
            100
        );

        $data = $this->service->getAll($perPage);

        return KendaraanDinasOperasionalResource::collection($data)
            ->additional([
                'success' => true,
                'message' => 'Data kendaraan dinas operasional berhasil diambil',
            ]);
    }

    public function show(int $kendaraan_dinas_operasional)
    {
        $data = $this->service->getById($kendaraan_dinas_operasional);

        return (new KendaraanDinasOperasionalResource($data))
            ->additional([
                'success' => true,
                'message' => 'Detail kendaraan berhasil diambil',
            ]);
    }

    public function store(StoreKendaraanDinasOperasionalRequest $request)
    {
        $data = $this->service->create($request->validated());

        return (new KendaraanDinasOperasionalResource($data))
            ->additional([
                'success' => true,
                'message' => 'Kendaraan berhasil ditambahkan',
            ])
            ->response()
            ->setStatusCode(201);
    }

    public function update(
        UpdateKendaraanDinasOperasionalRequest $request,
        int $kendaraan_dinas_operasional
    ) {
        $data = $this->service->update(
            $kendaraan_dinas_operasional,
            $request->validated()
        );

        return (new KendaraanDinasOperasionalResource($data))
            ->additional([
                'success' => true,
                'message' => 'Kendaraan berhasil diperbarui',
            ]);
    }

    public function destroy(int $kendaraan_dinas_operasional)
    {
        $this->service->delete($kendaraan_dinas_operasional);

        return response()->json([
            'success' => true,
            'message' => 'Kendaraan berhasil dihapus',
        ]);
    }
}
