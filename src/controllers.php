<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));


/*
 * DEFINITION DES ROUTES
 */

// front
$app
    ->get('/', 'index.controller:')
    /*->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array());
    })*/
    ->bind('homepage')
;

$app
    ->match('/login', 'membre.controller:loginAction')
    ->bind('login')
;

$app
    ->get('/afficher_membre', 'membre.controller:testAfficheUser')
    ->bind('afficher_membre')
;













$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
