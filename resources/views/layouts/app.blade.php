<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BPAD Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('web.dashboard') }}">
            BPAD Management
        </a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="{{ route('web.dashboard') }}">Dashboard</a>
            <a class="nav-link" href="{{ route('web.pegawai.index') }}">Pegawai</a>
            <a class="nav-link" href="{{ route('web.perangkat-daerah.index') }}">Perangkat Daerah</a>
            <a class="nav-link" href="{{ route('web.kendaraan.index') }}">Kendaraan</a>
        </div>
    </div>
</nav>

<main class="container py-4">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
