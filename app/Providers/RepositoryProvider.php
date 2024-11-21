<?php

namespace App\Providers;

use App\Interfaces\Auth\AuthInterface;
use App\Repositories\Auth\AuthRepository;
use Carbon\Laravel\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(AuthInterface::class,AuthRepository::class);

    }

    public function boot(): void
    {

    }
}



?>
