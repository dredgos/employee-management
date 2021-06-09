<?php

namespace App\Providers;

use App\Contracts\UserRepositoryInterface\BaseRepositoryInterface;
use app\Repository\BaseRepository\BaseRepository;
use UserRepositoryInterface;
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
