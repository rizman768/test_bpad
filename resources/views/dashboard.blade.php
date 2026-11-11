@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h3 class="fw-bold mb-4">Dashboard</h3>

<div class="row g-3">
    @foreach ([
        ['Pegawai', $totalPegawai, 'primary'],
        ['Perangkat Daerah', $totalPerangkat, 'success'],
        ['Kendaraan Dinas', $totalKendaraan, 'warning']
    ] as $item)
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-2">{{ $item[0] }}</p>
                    <h2 class="fw-bold text-{{ $item[2] }}">
                        {{ $item[1] }}
                    </h2>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
