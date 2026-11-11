
@extends('layouts.app')

@section('title', 'Data Kendaraan')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">Kendaraan Dinas Operasional</h3>
    <span class="badge bg-warning text-dark">
        {{ $kendaraan->count() }} Kendaraan
    </span>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nomor Polisi</th>
                        <th>Merek</th>
                        <th>Tipe</th>
                        <th>Tahun</th>
                        <th>Warna</th>
                        <th>Kondisi</th>
                        <th>Pegawai</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kendaraan as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td class="fw-semibold">{{ $item->nopol_kendaraan }}</td>
                        <td>{{ $item->merek_kendaraan }}</td>
                        <td>{{ $item->tipe_kendaraan }}</td>
                        <td>{{ $item->tahun_produksi }}</td>
                        <td>{{ $item->warna_kendaraan }}</td>
                        <td>
                            <span class="badge bg-success">
                                {{ $item->kondisi_kendaraan }}
                            </span>
                        </td>
                        <td>{{ $item->pegawai->nama ?? 'Belum ditugaskan' }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted py-4">
                            Belum ada data kendaraan
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
