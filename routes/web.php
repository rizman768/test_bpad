
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Models\Pegawai;
use App\Models\PerangkatDaerah;
use App\Models\KendaraanDinasOperasional;


#dimatikan dulu karena api dipanggil di service yang sama sehingga hit berulang
// Route::get('/', function () {
//     return redirect()->route('dashboard');
// });

// Route::get('/dashboard', function () {
//     $pegawai = Http::get(url('/api/pegawai'))->json();
//     $perangkat = Http::get(url('/api/perangkat-daerah'))->json();
//     $kendaraan = Http::get(url('/api/kendaraan-dinas-operasional'))->json();

//     return view('dashboard', [
//         'totalPegawai' => $pegawai['meta']['total'] ?? 0,
//         'totalPerangkat' => $perangkat['meta']['total'] ?? 0,
//         'totalKendaraan' => $kendaraan['meta']['total'] ?? 0,
//     ]);
// })->name('dashboard');

// Route::get('/pegawai', function () {
//     $response = Http::get(url('/api/pegawai'));

//     return view('pegawai.index', [
//         'pegawai' => $response->json('data') ?? [],
//     ]);
// })->name('pegawai.index');

// Route::get('/perangkat-daerah', function () {
//     $response = Http::get(url('/api/perangkat-daerah'));

//     return view('perangkat-daerah.index', [
//         'perangkat' => $response->json('data') ?? [],
//     ]);
// })->name('perangkat-daerah.index');

// Route::get('/kendaraan', function () {
//     $response = Http::get(url('/api/kendaraan-dinas-operasional'));

//     return view('kendaraan.index', [
//         'kendaraan' => $response->json('data') ?? [],
//     ]);
// })->name('kendaraan.index');

Route::get('/', fn() => redirect()->route('web.dashboard'));

Route::get('/dashboard', function () {
    return view('dashboard', [
        'totalPegawai' => Pegawai::count(),
        'totalPerangkat' => PerangkatDaerah::count(),
        'totalKendaraan' => KendaraanDinasOperasional::count(),
    ]);
})->name('web.dashboard');

Route::get('/pegawai', function () {
    $pegawai = Pegawai::with('perangkatDaerah')
        ->orderBy('id', 'desc')->get();

    return view('pegawai.index', compact('pegawai'));
})->name('web.pegawai.index');

Route::get('/perangkat-daerah', function () {
    $perangkat = PerangkatDaerah::withCount('pegawai')
        ->orderBy('id', 'desc')->get();

    return view('perangkat-daerah.index', compact('perangkat'));
})->name('web.perangkat-daerah.index');

Route::get('/kendaraan', function () {
    $kendaraan = KendaraanDinasOperasional::with('pegawai')
        ->orderBy('id', 'desc')->get();

    return view('kendaraan.index', compact('kendaraan'));
})->name('web.kendaraan.index');