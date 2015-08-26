<?php

$app->group(['prefix' => '/api/v1/', 'namespace' => 'App\Http\Api'], function($app) {
    $app->get('/users', 'Users\UsersController@index');
});