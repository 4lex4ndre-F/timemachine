<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Entity;

/**
 * créer les paramètres définissant un objet de la classe photo en private
 * créer les getter / setter
 *
 * @author Etudiant
 */
class Pictures {
    
    
    private $id;
    
    private $users_id;
    
    private $photo;
    
    private $title;
    
    private $header;
       
    private $content;
    
    private $date_record;
    
    private $date_picture;
    
    private $country;
    
    private $city;
    

    public function getId() {
        return $this->id;
    }

    public function getUsers_id() {
        return $this->users_id;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getHeader() {
        return $this->header;
    }

    public function getContent() {
        return $this->content;
    }

    public function getDate_record() {
        return $this->date_record;
    }

    public function getDate_picture() {
        return $this->date_picture;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getCity() {
        return $this->city;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setUsers_id($users_id) {
        $this->users_id = $users_id;
        return $this;
    }

    public function setPhoto($photo) {
        $this->photo = $photo;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setHeader($header) {
        $this->header = $header;
        return $this;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function setDate_record($date_record) {
        $this->date_record = $date_record;
        return $this;
    }

    public function setDate_picture($date_picture) {
        $this->date_picture = $date_picture;
        return $this;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    public function setCity($city) {
        $this->city = $city;
        return $this;
    }


}
