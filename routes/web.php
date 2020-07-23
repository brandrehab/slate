<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

foreach (DB::table('routes')->select()->get() as $route) {
    $verb = $route->verb;
    $router->{$route->verb}($route->path, [
      'as' => $route->name,
      'uses' => $route->controller . '@' . $route->action,
    ]);
}
