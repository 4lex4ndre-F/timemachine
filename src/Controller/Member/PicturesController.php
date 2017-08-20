<?php

namespace Controller\Member;

use Controller\ControllerAbstract;
use Entity\Pictures;
use Entity\Users;
//use Symfony\Component\Validator\Constraints\DateTime;

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
    
//    Inutile de lister les Photos du membre ici
//    car elles s'affichent directement quand on se log
//    public function listAction()
//    {
//        $pictures = $this->app['pictures.repository']->findAll();
//        
//        dump($pictures);die;
//        return $this->render(
//            'member/pictures_list.html.twig',
//            [
//                'pictures' => $pictures
////                'user' => $user
//            ]
//        );
//        
//    }
    
    
    // AJOUTER + EFFACER une Photo = editer
    public function editAction($id = null)
    {
        if(!is_null($id)) {
            // on va chercher la picture en BDD
            $picture = $this->app['pictures.repository']->find($id);
            
            if (empty($picture)) { // !$picture instanceof Pictures
                $this->app->abort(404);
            }
        } else {
            // Sinon nouvelle photo
            $picture = new Pictures();
            // la nouvelle Story
            // $picture->setStory(new Stories);
            dump($picture);
        }
        
        // on abesoin de la liste des rubriques pour construir le select dans le formulaire
        // $categories = $this->app['user.repository']->findAll();
        
        $errors =[];
         
        if(!empty($_POST)){
            dump($_POST);
            //$picture->setId($_POST['id'])
//            $picture->getUsers_id()->setId($_POST['users_id']);
            $user = $app['session']->get('user');
            dump($user);
            $picture->setTitle($_POST['title']);
            $picture->setHeader($_POST['header']);
            $picture->setContent($_POST['content']);
            $picture->setDate_Record($_POST['date_record']);
            $picture->setDate_Picture($_POST['date_picture']);
            $picture->setCountry($_POST['country']);
            $picture->setCity($_POST['city']);
            $picture->setPhoto($_FILES['photo']);
            // $picture->getStory()->setId($_POST['story']);
            
            if (empty($_FILES['photo']) ) {
                $errors['photo'] = 'Et la photo !!?';
            }
            if (empty($_POST['title']) ) {
                $errors['title'] = 'le titre est obligatoire';              
            } elseif (strlen($_POST['title']) > 100) {
                $errors['title'] = 'le titre ne doit pas faire plus de 100 caracteres';
            }          
            if (empty($_POST['header']) ) {
                $errors['header'] = 'le header est obligatoire';
            }
            if (empty($_POST['content'])) {
                $errors['content'] = 'le content est obligatoire';
            }
//            if (empty($_POST['date_record'])) {
//                $errors['date_record'] = 'la date_record est obligatoire';
//            }
            if (empty($_POST['date_picture'])) {
                $errors['date_picture'] = 'l\'année d\'origine est obligatoire';
            }
            if (empty($_POST['country'])) {
                $errors['country'] = 'le pays est obligatoire';
            }
            if (empty($_POST['city'])) {
                $errors['city'] = 'la ville est obligatoire';
            }
    
            if (empty($errors)) {
                $this->app['pictures.repository']->save($picture);
            
                $this->addFlashMessage('La photo est enregistrée');
                return $this->redirectRoute('area_access');
            } else {
                $message = '<srong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
            
        }
        return $this->render(
            'member/picture/edit.html.twig',
            [
                'picture' => $picture,
//                'now' => new DateTime()
            ]
        );
    }
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
