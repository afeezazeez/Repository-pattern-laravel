<?php

namespace App\Providers;

use App\Interfaces\CustomerRepositoryInterface;
use App\Repositories\CustomerRepository;
use App\Interfaces\ScanRepositoryInterface;
use App\Repositories\ScanRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CustomerRepositoryInterface::class,CustomerRepository::class);
        $this->app->bind(ScanRepositoryInterface::class,ScanRepository::class);

    }
}
