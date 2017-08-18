<?php

namespace Service;

use Entity\Users;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Description of UserManager
 *
 * @author yosemite_tanguy
 */
class UserManager
{
    /**
     *
     * @var Session
     */
    private $session;
    
    /**
     * 
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }
    
    public function encodePassword($plainPassword)
    {
        return password_hash($plainPassword, PASSWORD_BCRYPT); // PASSWORD_BCRYPT == PASSWORD_DEFAULT
    }
    
    /**
     * 
     * @param string $plainPassword
     * @param string $encodePassword
     * @return bool
     */
    public function verifyPassword($plainPassword, $encodePassword)
    {
        return password_verify($plainPassword, $encodePassword); // password_verify = fonction native php
    }
    
    /**
     * 
     * @param User $user
     * @return null
     */
    public function login(Users $user)
    {
        // = $_SESSION['$user']
        $this->session->set('user', $user);
    }
    
    public function logout()
    {
        // = unset($_SESSION['$user']
        $this->session->remove('user');
        // set, get, has, remove <= symfony
    }
    
    /**
     * 
     * @return User|null
     */
    public function getUser()
    {
        return $this->session->get('user');
    }

    /**
     * 
     * @return string
     */
    public function getUserName()
    {
        if ($this->session->has('user')) {
            return $this->session->get('user')->getFullName();
        }
        
        return '';
    }
    
    public function isAdmin()
    {
        return $this->session->has('user') && $this->session->get('user')->isAdmin();
        
    }
    
    public function isMember()
    {
        return $this->session->has('user') && $this->session->get('user')->isMember();
    }
}
