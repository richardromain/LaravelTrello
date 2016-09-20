<?php

namespace Richardromain\LaravelTrello;

use Illuminate\Support\ServiceProvider;

class LaravelTrelloServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Trello::class, function ($app) {
            return new Trello();
        });
    }
}
