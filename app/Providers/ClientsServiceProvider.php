<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Clients\ClientInterface;
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
        $this->app->bind(ClientInterface::class, ClientRepository::class);
    }
}
