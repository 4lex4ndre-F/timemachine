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
    public function loginAction ($name = null, $password = null)
    {
        $errors = "";
        $name = $_POST['user'];
        $password = $_POST['pass'];
        
        if(!empty($_POST)){
            $response = [
                'name' => $name,
                'password' => $password
            ];
        }else {
            $errors = "Les champs sont obligatoires";
            $response = ['errors' => $errors];
        }
        
        return $this->render('login_confirm.html.twig', $response);

    }
}
