<?php

namespace Controller\User;

use Controller\ControllerAbstract;
use Entity\Pictures;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PicturesController
 *
 * @author yosemite_tanguy
 */
class PicturesController {
    public function listAction()
    {
        $pictures = $this->app['picture.repository']->findAll();
        
        return $this->render(
                'user/picture/list.html.twig',
            [
                'pictures' => $pictures
            ]
        );
    }
}
