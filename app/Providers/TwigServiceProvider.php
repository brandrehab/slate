<?php

namespace App\Providers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Illuminate\Support\ServiceProvider;

class TwigServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Environment::class, function ($app) {
            $loader = new \Twig\Loader\FilesystemLoader($this->app->basePath('templates'));
            return new Environment($loader, [
                'debug' => env('APP_DEBUG'),
                'cache' => $this->app->storagePath('framework/twig'),
                'auto_reload' => true,
                'autoescape' => 'html',
            ]);
        });
    }
}
