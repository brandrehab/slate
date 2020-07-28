<?php

namespace App\Providers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Twig\TwigFunction;
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
            $twig = new Environment($loader, [
                'debug' => env('APP_DEBUG'),
                'cache' => $this->app->storagePath('framework/twig'),
                'auto_reload' => true,
                'autoescape' => 'html',
            ]);

            $route = new TwigFunction('route', function ($name, $args = []) {
                return route($name, $args);
            });
            $twig->addFunction($route);

            $old = new TwigFunction('old', function ($name, $default = null) {
                return app('request')->old($name, $default);
            });
            $twig->addFunction($old);

            $invalid = new TwigFunction('invalid', function ($name) {
                return app('request')->old('errors.' . $name) ? 'is-invalid' : null;
            });
            $twig->addFunction($invalid);

            $errors = new TwigFunction('errors', function ($name) {
                return implode('<br>', app('request')->old('errors.' . $name));
            });
            $twig->addFunction($errors);

            $session = new TwigFunction('session', function ($name) {
                return app('request')->session()->get($name);
            });
            $twig->addFunction($session);

            return $twig;
        });
    }
}
