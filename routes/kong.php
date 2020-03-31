<?php

$router->group(['prefix' => 'v1/kong/'], function () use ($router) {
    $router->get('long_str', ['uses' => 'KongController@longStr']);
});
