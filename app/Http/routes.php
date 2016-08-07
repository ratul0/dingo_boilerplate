<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1',function ($api){
   $api->get('/test',function (){
       return "test";
   });
});

$api->version('v2',function ($api){
    $api->get('/test',function (){
        return "test2";
    });
});