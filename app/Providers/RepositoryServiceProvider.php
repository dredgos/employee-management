<?php

namespace App\Providers;

use App\Repository\BaseRepository;
use App\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;
use App\Contracts\IRepository\BaseRepositoryInterface;
use App\Contracts\IRepository\UserRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
        $this->app->bind(
            BaseRepositoryInterface::class, 
            BaseRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
