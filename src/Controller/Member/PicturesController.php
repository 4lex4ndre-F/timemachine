<?php

namespace Controller\Member;

use Controller\ControllerAbstract;
use Entity\Pictures;
use Entity\Users;

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
class PicturesController extends ControllerAbstract {
    
    public function listAction()
    {
        $pictures = $this->app['pictures.repository']->findAll();
        
        dump($pictures);die;
        return $this->render(
            'member/pictures_list.html.twig',
            [
                'pictures' => $pictures
//                'user' => $user
            ]
        );
        
    }
    
    
//    public function editAction($id = null)
//    {
//        if(!is_null($id)) {
//            // on va chercher l'picture en BDD
//            $picture = $this->app['picture.repository']->find($id);
//            
//            if (empty($picture)) { // !$picture instanceof Pictures
//                $this->app->abort(404);
//            }
//        } else {
//            // la nouvelle categorie
//            $picture = new Pictures();
//            $picture->setCategory(new Users);
//        }
//        
//        // on abesoin de la liste des rubriques pour construir le select dans le formulaire
//        $categories = $this->app['user.repository']->findAll();
//        
//        $errors =[];
//         
//        if(!empty($_POST)){
//            $picture->setTitle($_POST['title']);
//            $picture->setHeader($_POST['header']);
//            $picture->setContent($_POST['content']);
//            
//            $picture->getCategory()->setId($_POST['user']);
//            
//            if (empty($_POST['title']) ) {
//                $errors['title'] = 'le titre est obligatoire';              
//            } elseif (strlen($_POST['title']) > 100) {
//                $errors['title'] = 'le nom ne doit pas faire plus de 100 caracteres';
//            }
//            
//            if (empty($_POST['header']) ) {
//                $errors['header'] = 'le header est obligatoire';
//            }
//            
//            if (empty($_POST['content'])) {
//                $errors['content'] = 'le content est obligatoire';
//            }
//            
//            if (empty($_POST['user'])) {
//                $errors['user'] = 'la rubrique est obligatoire';
//            }
//            
//            if (empty($errors)) {
//                $this->app['picture.repository']->save($picture);
//            
//                $this->addFlashMessage('L\'picture est enregistré');
//                return $this->redirectRoute('admin_pictures');
//            } else {
//                $message = '<srong>Le formulaire contient des erreurs</strong>';
//                $message .= '<br>' . implode('<br>', $errors);
//                $this->addFlashMessage($message, 'error');
//            }
//            
//        }
//        return $this->render(
//            'admin/picture/edit.html.twig',
//            [
//                'picture' => $picture,
//                'categories' => $categories
//            ]
//        );
//    }
//    
//    public function deleteAction($id)
//    {
//        $picture = $this->app['picture.repository']->find($id);
//        
//        if (!$picture instanceof Pictures) { // (!$user instanceof Users) = (empty($user))
//                $this->app->abort(404);
//        }
//        
//        $this->app['picture.repository']->delete($picture);
//                
//        $this->addFlashMessage('L\'picture est supprimé');
//        
//        return $this->redirectRoute('admin_pictures');
//    }


}
