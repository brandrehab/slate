<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Slate Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/admin/nodes', [
    'as' => 'admin.nodes.get',
    'uses' => 'NodesController@show',
]);

$router->get('/admin/groups', [
    'as' => 'admin.groups.get',
    'uses' => 'GroupsController@show',
]);
