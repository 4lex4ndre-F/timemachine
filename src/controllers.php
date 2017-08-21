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

// Homepage indexAction(Login + Inscription + afficher photo)
$app
        ->match('/', 'index.controller:indexAction') // definir l'emplacement de la route
        ->bind('homepage') // nomer la route
;

// INUTILE car l'inscription se fait dans IndexController.php (cf ci-dessus)
//$app
//        ->match('/utilisateur/inscription', 'users.controller:registerAction')
//        ->bind('user_register')
//;


// Acces à l'espace Admin ou Membre (+ affichage des photos du membre)
//$app
//        ->match('/espace_utilisateur', 'users.controller:areaAccesAction')
//        ->bind('area_access')
//;

// loginAction()
$app
        ->match('/utilisateur/connexion', 'users.controller:loginAction')
        ->bind('user_login')
;

// logoutAction()
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
        $app->abort(403, 'Accès refusé'); // abbort
    }
});

$app->mount('/membre', $member);

// Editer une photo
$member
        ->match('/espace_utilisateur/photo/edition/{id}', 'member.pictures.controller:editAction')
        ->value('id', null)
        ->bind('member_pictures_edit')
        // exemple
        // ->match('/article/edition/{id}', 'admin.article.controller:editAction')
        // ->value('id', null) // valeur par défaut pour l'id
        // ->bind('admin_article_edit')
;
/* Afficher Page Membre */
$member
        ->get('/espace_utilisateur', 'member.index.controller:profilAction')
        ->bind('member_profil')
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
        $app->abort(403, 'Accès refusé');
    }
});

// ttes les routes définies par $admin
// auront une URL commençant par /admin sans avoir à l'ajouter dans chaque route
$app->mount('/admin', $admin);

/* Afficher Page Membre */
$admin
        ->get('/espace_utilisateur', 'admin.index.controller:profilAction')
        ->bind('admin_profil')
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
