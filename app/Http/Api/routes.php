<?php

$app->group(['prefix' => '/api/v1/'], function($app) {
    $app->get('/users', function() {
        return 'hello api';
    });
});