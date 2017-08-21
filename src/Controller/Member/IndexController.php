<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller\Member;

use Controller\ControllerAbstract;

/**
 * Description of IndexController
 *
 * @author yosemite_tanguy
 */
class IndexController extends ControllerAbstract {
    
    public function profilAction()
    {
        $user = $this->app['user.manager']->getUser();
        return $this->render(
            'member/home_member.html.twig',
                [
                    'user' => $user
                ]
            
        );
        
    }
}
