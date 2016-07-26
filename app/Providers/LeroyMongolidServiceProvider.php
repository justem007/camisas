<?php

namespace Camisa\Providers;

use Illuminate\Support\ServiceProvider;
use Zizaco\Mongolid\MongoDbConnector;

class LeroyMongolidServiceProvider extends ServiceProvider
{
    protected $leroymongolid;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MongoDbConnector::class, function () {
            return $this->leroymongolid;
        });
    }
}
