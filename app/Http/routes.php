<?php

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

$app->get('/', 'Home\HomeController@index');

// Events
$app->get('/events', 'Events\EventsController@index');
$app->get('/events/{slug}', 'Events\EventsController@eventPage');
$app->post('/events/{slug}', 'Events\EventsController@eventRegistration');
$app->get('/events/{slug}/success', 'Events\EventsController@paymentSuccess');
$app->get('/events/{slug}/failed', 'Events\EventsController@paymentFailed');

$app->post('/payment/postback', 'Payments\PaymentsController@postback');
$app->post('/payment/validate', 'Payments\PaymentsController@postback');
$app->post('/payment/confirm', 'Payments\PaymentsController@postback');

// Admin Dashboard
$app->get('/admin/dashboard', 'Admin\DashboardController@index');

