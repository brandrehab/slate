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

$router->get('/admin/nodes/{id:\d+}', [
    'as' => 'admin.node.get',
    'uses' => 'NodesController@edit',
]);

$router->get('/admin/groups', [
    'as' => 'admin.groups.get',
    'uses' => 'GroupsController@show',
]);

$router->post('/admin/groups/reorder', [
    'as' => 'admin.groups.reorder',
    'uses' => 'GroupsController@reorder',
]);

$router->get('/admin/groups/{id:\d+}', [
    'as' => 'admin.group.get',
    'uses' => 'GroupsController@edit',
]);

$router->post('/admin/groups/{id:\d+}', [
    'as' => 'admin.group.post',
    'uses' => 'GroupsController@update',
]);

$router->post('/admin/fields/reorder', [
    'as' => 'admin.fields.reorder',
    'uses' => 'FieldsController@reorder',
]);
