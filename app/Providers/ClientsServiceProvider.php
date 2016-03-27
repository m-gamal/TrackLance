<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Clients\ClientRepositoryInterface;
use App\Repositories\Clients\ClientRepository;

class ClientsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ClientRepositoryInterface::class, ClientRepository::class);
    }
}
