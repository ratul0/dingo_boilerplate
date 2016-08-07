<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1',function ($api){
   $api->post('/login','App\Http\Controllers\Auth\AuthController@login');
});
