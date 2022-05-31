<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\IMoviesRepository;
use App\Repositories\MoviesRepository;


class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
            $this->app->bind(IMoviesRepository::class, MoviesRepository::class);
    }


    public function boot()
    {
        //
    }
}
