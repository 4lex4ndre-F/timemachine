<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Entity\membre;

/**
 * Description of MembreController
 *
 * @author Etudiant
 */
class MembreController extends ControllerAbstract{

    public function loginAction()
    {
        $email = '';
        
        $user = '';
        if (!empty($_POST)) {
            $email = $_POST['email'];
            $user = $this->app['membre.repository']->findByEmail($email);
            if (!is_null($user)) {
                if ($this->app['user.manager']->verifyPassword($_POST['password'], $user->getPassword())) {
                    $this->app['user.manager']->login($user);
                    
                    return $this->redirectRoute('homepage');
                }
            }
            
            //$this->addFlashMessage('Identification incorrecte', 'error');
        }
        
        return $this->render(
            'login_confirm.html.twig',
            ['email' => $email, 'User' => $user]
        );
    }
    
    public function testAfficheUser()
    {
        $user = $this->app['membre.repository']->testFindAll();
        
        return $this->render(
            'index.html.twig',
            ['User' => $user]
        );
        
    }
}
