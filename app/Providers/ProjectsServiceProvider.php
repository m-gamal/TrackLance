<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Projects\ProjectInterface;
use App\Repositories\Projects\ProjectRepository;

class ProjectsServiceProvider extends ServiceProvider
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
        $this->app->bind(ProjectInterface::class, ProjectRepository::class);
    }
}
