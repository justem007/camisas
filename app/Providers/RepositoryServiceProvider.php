<?php

namespace Camisa\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Camisa\Repositories\ProductRepository::class, \Camisa\Repositories\ProductRepositoryEloquent::class);
        $this->app->bind(\Camisa\Repositories\CategoryRepository::class, \Camisa\Repositories\CategoryRepositoryEloquent::class);
        //:end-bindings:
    }
}
