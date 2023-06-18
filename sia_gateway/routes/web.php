<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware' => 'client.credentials'], function() use ($router){
    
    $router->group(['prefix' => 's1'], function($router) {
        $router->get('/users', 'User1Controller@index');
        $router->get('/users/{id}', 'User1Controller@show');
        $router->post('/users', 'User1Controller@add');
        $router->patch('/users/{id}', 'User1Controller@edit');
        $router->delete('/users/{id}', 'User1Controller@delete');

        $router->get('/userjob','UserJob1Controller@index');           
        $router->get('/userjob/{id}','UserJob1Controller@show');            
    });


    $router->group(['prefix' => 's2'], function($router) {
        $router->get('/users', 'User2Controller@index');
        $router->get('/users/{id}', 'User2Controller@show');
        $router->post('/users', 'User2Controller@add');
        $router->patch('/users/{id}', 'User2Controller@edit');
        $router->delete('/users/{id}', 'User2Controller@delete');

        $router->get('/userjob','UserJob2Controller@index');             
        $router->get('/userjob/{id}','UserJob2Controller@show');            
    });
});