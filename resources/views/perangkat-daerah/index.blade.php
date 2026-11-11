
@extends('layouts.app')

@section('title', 'Data Perangkat Daerah')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">Data Perangkat Daerah</h3>
    <span class="badge bg-success">{{ $perangkat->count() }} Instansi</span>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama Instansi</th>
                        <th>Jumlah Pegawai</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($perangkat as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_instansi }}</td>
                        <td>
                            <span class="badge bg-primary">
                                {{ $item->pegawai_count }} Pegawai
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">
                            Belum ada data perangkat daerah
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
