<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Controller\ControllerAbstract;
use Entity\Users;
use Repository\PicturesRepository;
use Entity\Pictures;


/**
 * Description of UsersController
 *
 * @author yosemite_tanguy
 */
class UsersController extends ControllerAbstract
{
    /*-----------------------------------------*\
    
           registerAction() & loginAction()           
            
          SE TROUVE DANS IndexController.php
          
    \*-----------------------------------------*/

    
    public function areaAccesAction()
    {
        
        $user = $this->app['user.manager']->getUser();     
//        $pictures = $this->app['pictures.repository']->find($id);
//        dump($pictures);
        dump($user);
        return $this->render(
            'user/area_access.html.twig',
            [
                'user' => $user,
//                'pictures' => $pictures
            ]
        );
    }
    
    public function logoutAction()
    {
        $this->app['user.manager']->logout();
        
        return $this->redirectRoute('homepage');
    }
    
    
}
