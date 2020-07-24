<?php

namespace App\Providers;

use App\Factories\ViewFactory;
use App\Factories\BlockFactory;
use Slate\Factories\AdminViewFactory;
use Slate\Factories\AdminBlockFactory;
use Twig\Environment;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ViewFactory::class, function ($app) {
            return new ViewFactory(
                $app->make(Environment::class),
                $app->make(BlockFactory::class),
            );
        });

        $this->app->bind(AdminViewFactory::class, function ($app) {
            return new AdminViewFactory(
                $app->make(Environment::class),
                $app->make(AdminBlockFactory::class),
            );
        });
    }
}
