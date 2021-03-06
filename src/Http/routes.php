<?php

require_once apolune_path('About/Http/routes.php');
require_once apolune_path('Account/Http/routes.php');
require_once apolune_path('Guilds/Http/routes.php');
require_once apolune_path('Highscore/Http/routes.php');
require_once apolune_path('Library/Http/routes.php');
require_once apolune_path('News/Http/routes.php');
require_once apolune_path('Profile/Http/routes.php');
require_once apolune_path('Support/Http/routes.php');
require_once apolune_path('Worlds/Http/routes.php');

$router->group(['middleware' => 'web', 'namespace' => $namespace], function ($router) {
    $router->post('/api/name', 'ApiController@suggestName');
    $router->post('/api/validate/account', 'ApiController@validateAccount');
    $router->post('/api/validate/email', 'ApiController@validateEmail');
    $router->post('/api/validate/password', 'ApiController@validatePassword');
    $router->post('/api/validate/name', 'ApiController@validateName');
});
