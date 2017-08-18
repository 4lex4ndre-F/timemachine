<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Entity\Users;

/**
 * Description of UsersController
 *
 * @author yosemite_tanguy
 */
class UsersController extends ControllerAbstract
{
//    /*-----------------------------------------
//    
//           registerAction() & loginAction()           
//            
//          SE TROUVE DANS IndexController.php
//          
//          -> pour etre plus précis: les vérif
//          
//    /*-----------------------------------------

    
    public function editProfilAction()
    {
        $user = $this->app['user.manager']->getUser();
        
        return $this->render(
            'user/edit_profil.html.twig',
            [
                'user' => $user,
            ]
        );
    }
    
    public function logoutAction()
    {
        $this->app['user.manager']->logout();
        
        return $this->redirectRoute('homepage');
    }
    
    
}