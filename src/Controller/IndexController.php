<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Entity\Users;

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
        
        $user = new Users; // a besoin de Entity
        
        $errors = [];
        
        if (!empty($_POST)) {
            $user
                ->setEmail($_POST['email'])
//                ->setStatus($_POST['status']) enum user, admin
            ;         
            //var_dump($_POST);
            if (empty($_POST['email'])) {
                $errors['email'] = 'l\'email est obligatoire';
            } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'l\'email est n\'est pas valide';
            } 
            elseif (!empty ($this->app['users.repository']->findByEmail($_POST['email']) )) {
                $errors['email'] = 'Cet email est déjà utilisé';
            }
            
            if (empty($_POST['password'])) {
                $errors['password'] = 'le mot de passe est obligatoire';
            } elseif (!preg_match('/^[a-zA-Z0-9_-]{4,20}$/', $_POST['password'])) {
                $errors['password'] = 'Le mot de passe doit faire entre 4 et 20 caractères'
                    . ' et ne contenir que des lettres, des chiffres, ou les caractères _ et -'
                ;
            }
            
            if (empty($errors)) {
                $user->setPassword($this->app['user.manager']->encodePassword($_POST['password']));
                $this->app['users.repository']->save($user);
                
                // enregistre l'utilisateur en session
                $this->app['user.manager']->login($user);
                
                $this->addFlashMessage('Votre compte est créé');
                
                // CREER PAGE "espace user"
                return $this->redirectRoute('user_profil');
                
            } else {
                $message = '<srong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        
        return $this->render(
            'home.html.twig',
            [
                'pictures' => $pictures,
                'user' => $user // variable 'user' pour twig
            ]
        );
    }
    
}
