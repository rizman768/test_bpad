<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\PegawaiRepositoryInterface;
use App\Repositories\PegawaiRepository;
use App\Interfaces\PerangkatDaerahRepositoryInterface;
use App\Repositories\PerangkatDaerahRepository;
use App\Interfaces\KendaraanDinasOperasionalRepositoryInterface;
use App\Repositories\KendaraanDinasOperasionalRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            PegawaiRepositoryInterface::class,
            PegawaiRepository::class
        );
        $this->app->bind(
            PerangkatDaerahRepositoryInterface::class,
            PerangkatDaerahRepository::class
        );
        $this->app->bind(
            KendaraanDinasOperasionalRepositoryInterface::class,
            KendaraanDinasOperasionalRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
