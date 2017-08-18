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
        ->get('/espace_utilisateur', 'users.controller:areaAccesAction')
        ->bind('area_access')
;

$app
        ->match('/utilisateur/deconnexion', 'users.controller:logoutAction')
        ->bind('user_logout')
;

/* ----------------------------------
            
            ESPACE MEMBRE

 ----------------------------------*/
$member = $app['controllers_factory'];

$member->before(function () use ($app) {
    if (!$app['user.manager']->isMember() ) {
        $app->abbort(403, 'Accès refusé');
    }
});

$app->mount('/member', $member);

// l'URL de cette route est /member/...
$member
    ->get('/', 'member.pictures.controller:listAction')
    ->bind('member_pictures')
;
/* ----------------------------------
            
                BACK

 ----------------------------------*/

/* ----------------------------------
Permet de PLACER admin
devant les route de :
 * RUBRIQUES
 * ARTICLES
 ----------------------------------*/

// crée un groupe de routes
$admin = $app['controllers_factory'];

/*
 * Pour ttes les routes du groupe,
 *  si on est pas connecté en admin, on se prend une 403
 */
$admin->before(function () use ($app) {
    if (!$app['user.manager']->isAdmin() ) {
        $app->abbort(403, 'Accès refusé');
    }
});

// ttes les routes définies par $admin
// auront une URL commençant par /admin sans avoir à l'ajouter dans chaque route
$app->mount('/admin', $admin);


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
