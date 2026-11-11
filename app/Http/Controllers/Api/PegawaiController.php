<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\PegawaiService;
use App\Http\Requests\Pegawai\StorePegawaiRequest;
use App\Http\Requests\Pegawai\UpdatePegawaiRequest;
use App\Http\Resources\PegawaiResource;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    protected PegawaiService $pegawaiService;

    public function __construct(PegawaiService $pegawaiService)
    {
        $this->pegawaiService = $pegawaiService;
    }

    // GET /api/pegawai
    public function index(Request $request)
    {
        $perPage = min(
            max($request->integer('per_page', 10), 1),
            100
        );

        $pegawai = $this->pegawaiService->getAll($perPage);

        return PegawaiResource::collection($pegawai)
            ->additional([
                'success' => true,
                'message' => 'Data pegawai berhasil diambil',
            ]);
    }

    // GET /api/pegawai/{pegawai}
    public function show(int $pegawai)
    {
        $data = $this->pegawaiService->getById($pegawai);

        return (new PegawaiResource($data))
            ->additional([
                'success' => true,
                'message' => 'Detail pegawai berhasil diambil',
            ]);
    }

    // POST /api/pegawai
    public function store(StorePegawaiRequest $request)
    {
        $data = $this->pegawaiService->create(
            $request->validated()
        );

        return (new PegawaiResource($data))
            ->additional([
                'success' => true,
                'message' => 'Pegawai berhasil ditambahkan',
            ])
            ->response()
            ->setStatusCode(201);
    }

    // PUT/PATCH /api/pegawai/{pegawai}
    public function update(
        UpdatePegawaiRequest $request,
        int $pegawai
    ) {
        $data = $this->pegawaiService->update(
            $pegawai,
            $request->validated()
        );

        return (new PegawaiResource($data))
            ->additional([
                'success' => true,
                'message' => 'Pegawai berhasil diperbarui',
            ]);
    }

    // DELETE /api/pegawai/{pegawai}
    public function destroy(int $pegawai)
    {
        $this->pegawaiService->delete($pegawai);

        return response()->json([
            'success' => true,
            'message' => 'Pegawai berhasil dihapus',
        ]);
    }
}
