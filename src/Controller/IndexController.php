<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Silex\Application;

/**
 * Description of IndexController
 *
 * @author yosemite_tanguy
 */
class IndexController
{
    public function indexAction(Application $app) // INTRO/ "HOME"
    {
        return $app['twig']->render(
                'home.html.twig'
        );
    }
//    public function indexAction() // BLOG/HOME
//    {
//        $articles = $this->app['article.repository']->findAll();
//        return $this->render(
//            'index.html.twig',
//            ['articles' => $articles]
//        );
//    }
    
}
