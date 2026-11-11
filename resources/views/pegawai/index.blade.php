
@extends('layouts.app')

@section('title', 'Data Pegawai')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">Data Pegawai</h3>
    <span class="badge bg-primary">{{ $pegawai->count() }} Pegawai</span>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Jabatan</th>
                        <th>Golongan</th>
                        <th>Perangkat Daerah</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pegawai as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->golongan }}</td>
                        <td>{{ $item->perangkatDaerah->nama_instansi ?? '-' }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            Belum ada data pegawai
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
