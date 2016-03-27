<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Notes\NoteInterface;
use App\Repositories\Notes\NoteRepository;

class NotesServiceProvider extends ServiceProvider
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
        $this->app->bind(NoteInterface::class, NoteRepository::class);
    }
}
