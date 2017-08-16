<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

/* Ajout de Doctrine DBAL ($app['db])
 * 
 * nécessite l'installation par composer :
 * composer require doctrine/dbal: ~2.2 <= g du faire un composer update
 * en ligne de commande dans le repertoire de l'application
 */
$app->register(
        new DoctrineServiceProvider(), // clic droit fixuses
        [
            'db.options' => [
                'driver' => 'pdo_mysql',
                'host' => 'localhost',
                'dbname' => 'TimeMachine',
                'user' => 'root',
                'password' => 'root',
                'charset' => 'utf8'
            ]
        ]
);

/* ----------------------------------

             CONTROLLERS 

 ----------------------------------*/

/* 
 * Front
 */
/* Homepage */
$app['index.controller'] = function() use ($app){
    // use pour éviter global $app
    // global $app;
    return new \Controller\IndexController($app);
};


/* ----------------------------------

              REPOSITORIES
 
 * ----------------------------------*/

$app['pictures.repository'] = function() use ($app){
    return new \Repository\PicturesRepository($app);
};

return $app;