<?php

namespace Entity;

/**
 * Description of membre
 * variables + getters/setters
 *
 * @author Etudiant
 */
class Users {
    /**
     * c'est la primary key
     * @var int 
     */
    private $id;
    
    /**
     *
     * @var string 
     */
    private $firstname;
    
    /**
     *
     * @var string 
     */
    private $lastname;
    
    /**
     *
     * @var string 
     */
    private $gender;
    
    /**
     *
     * @var string 
     */
    private $pseudo;
    
    /**
     *
     * @var string 
     */
    private $email;
    
    /**
     *
     * @var string 
     */
    private $password;
    
    /**
     *
     * @var string 
     */
    private $status;
    
    
    // Les getters / setters
    public function getId() {
        return $this->id;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    public function setGender($gender) {
        $this->gender = $gender;
        return $this;
    }

    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function getFullName()
    {
        return $this->firstname . '' . $this->lastname;
    }
    
    public function isAdmin()
    {
        return $this->status == 'admin';
    }
    
    public function isMember()
    {
        return $this->status == 'user';
    }
}
