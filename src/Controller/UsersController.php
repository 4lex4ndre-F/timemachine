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
    public function registerAction()
    {
        $user = new Users; // a besoin de Entity
        
        $errors = [];
        
        if (!empty($_POST)) {
            $user
                ->setEmail($_POST['email'])
//                ->setStatus($_POST['status']) enum user, admin
            ;         
            
            if (empty($_POST['email'])) {
                $errors['email'] = 'l\'email est obligatoire';
            } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'l\'email est n\'est pas valide';
            } 
            elseif (!empty ($this->app['user.repository']->findByEmail($_POST['email']) )) {
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
                $this->app['user.repository']->save($user);
                
                // CREER PAGE "espace user"
                return $this->redirectRoute('homepage');
                
            } else {
                $message = '<srong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
//            'user/register.html.twig',
            'home.html.twig',
            [
                'user' => $user,
            ]
        );
    }
    
    
}
