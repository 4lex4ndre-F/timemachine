<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

/* ----------------------------------
    
                FRONT

 ----------------------------------*/
$app
        // Homepage + Inscription
        ->match('/', 'index.controller:indexAction') // definir l'emplacement de la route
        ->bind('homepage') // nomer la route
;

// INUTILE car inscription est dans IndexController.php (cf ci-dessus)
//$app
//        ->match('/utilisateur/inscription', 'users.controller:registerAction')
//        ->bind('user_register')
//;

$app
        ->get('/abonne/afficher_profil', 'users.controller:editProfilAction')
        ->bind('user_profil')
;

$app
        ->match('/utilisateur/deconnexion', 'users.controller:logoutAction')
        ->bind('user_logout')
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
