<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\TwigServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});


/**
 * connexion à la BDD via :
 * DOCTRINE ->
 *  -> DBAL : couche de base doctrine ~PDO - Data Base Abstraction Layer
 * 
 * ===> Ajout doctrine DBAL ($app['db'] dans $app
 * 
 * nécéssite l'installation par composer:
 *      composer require doctrine/dbal:~2.2
 *      en ligne de commande dans le reperetoire de l'application
 * 
 * /!\ créer le controller
 */
$app->register(
    new DoctrineServiceProvider(),
    [
        /* conventions de nomage */
        'db.options' => [
            'driver' => 'pdo_mysql',
            'host' => 'localhost',
            'dbname' => 'timemachine',
            'user' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ]
    ]
);




return $app;
