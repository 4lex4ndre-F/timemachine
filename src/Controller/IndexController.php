<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

/**
 * Description of IndexController
 *
 * @author yosemite_tanguy
 */
class IndexController extends ControllerAbstract
{
//    INTRO/HOME === cmap silex vs cmap shéma "simple"
//    public function indexAction(Application $app)
//    {
//        return $app['twig']->render(
//                'home.html.twig'
//        );
//    }
    
//  BLOG/HOME    
    public function indexAction()
    {
        $pictures = $this->app['pictures.repository']->findAll();
        return $this->render(
            'home.html.twig',
            ['pictures' => $pictures]
        );
    }
    
}
