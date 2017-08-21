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
//    public function registerAction()
//    {
//    /* Les Requettes */
////        $pictures = $this->app['pictures.repository']->findAll();        
//        $user = new Users; // a besoin de Entity
//        
//    /* Déclarer les variables */
//        $errors = [];        
//        $emailcreate ='';
//        
//        
//        /* $emailcreate */
//        if (!empty($_POST['create'])) {
//            
//            $user
//                ->setEmail($_POST['emailcreate'])
////                ->setStatus($_POST['status']) enum user, admin
//            ;         
//            //var_dump($_POST);
//            if (empty($_POST['emailcreate'])) {
//                $errors['email'] = 'l\'email est obligatoire';
//                
//            } elseif (!filter_var($_POST['emailcreate'], FILTER_VALIDATE_EMAIL)) {
//                $errors['email'] = 'l\'email est n\'est pas valide';
//            } 
//            elseif (!empty ($this->app['users.repository']->findByEmail($_POST['emailcreate']) )) {
//                $errors['email'] = 'Cet email est déjà utilisé';
//            }
//            
//            if (empty($_POST['password'])) {
//                $errors['password'] = 'le mot de passe est obligatoire';
//            } elseif (!preg_match('/^[a-zA-Z0-9_-]{4,20}$/', $_POST['password'])) {
//                $errors['password'] = 'Le mot de passe doit faire entre 4 et 20 caractères'
//                    . ' et ne contenir que des lettres, des chiffres, ou les caractères _ et -'
//                ;
//            }
//            
//            if (empty($errors)) {
//                $user->setPassword($this->app['user.manager']->encodePassword($_POST['password']));
//                $this->app['users.repository']->save($user);
//                
//                // enregistre l'utilisateur en session
//                $this->app['user.manager']->login($user);
//                
//                $this->addFlashMessage('Votre compte est créé');
//                
//                // CREER PAGE "espace user"
//                return $this->redirectRoute('area_access');
//                
//            } else {
//                $message = '<srong>Le formulaire contient des erreurs</strong>';
//                $message .= '<br>' . implode('<br>', $errors);
//                $this->addFlashMessage($message, 'error');
//            }
//        }
//        
//        return $this->render(
//            'user/register.html.twig',
//            [
//                'user' => $user
//            ]
//        );
//      
//    }
//    
    public function loginAction()
    {
        //    /* Les Requettes */
////        $pictures = $this->app['pictures.repository']->findAll();        
        //$user = new Users; // a besoin de Entity
  
        $email = '';
        $emaillogin = '';
        $user = '';
        
        /* $emaillogin */       
        if(!empty($_POST['login'])) {
            
            $emaillogin = $_POST['emaillogin'];

            $user = $this->app['users.repository']->findByEmail($emaillogin);
            
            if (!is_null($user)) {
                
                if($this->app['user.manager']->verifyPassword($_POST['password'], $user->getPassword())) {
                    
                    $this->app['user.manager']->login($user);
                    
                    if ($user->getStatus() == 'user') {
                        return $this->redirectRoute('member_profil');
                    }elseif ($user->getStatus() == 'admin') {
                        return $this->redirectRoute('admin_profil');
                    }
                    
                }
            }
            
            $this->addFlashMessage('Identification incorrecte', 'error');
        }
    
    /* Si emailcreate & login Faux */
        return $this->render(
            'user/login.html.twig',
            [
                // 'pictures' => $pictures,
                //'user' => $user, // variable 'user' pour twig
                'emaillogin' => $emaillogin
                // 'emailcreate' => $emailcreate
            ]
        );
        
    }
    
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
