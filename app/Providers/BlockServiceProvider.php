<?php

namespace App\Providers;

use App\Factories\BlockFactory;
use Slate\Factories\AdminBlockFactory;
use Illuminate\Support\ServiceProvider;

class BlockServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BlockFactory::class, function ($app) {
            return new BlockFactory();
        });

        $this->app->bind(AdminBlockFactory::class, function ($app) {
            return new AdminBlockFactory();
        });
    }
}
