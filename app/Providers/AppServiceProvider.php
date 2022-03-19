<?php

namespace App\Providers;

use App\Repositories\Contracts\TaskRepositoryContract;
use App\Repositories\EloquentTaskRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(TaskRepositoryContract::class, EloquentTaskRepository::class);
    }
}
