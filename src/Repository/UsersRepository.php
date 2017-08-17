<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Repository;

use Entity\Users;

/**
 * Description of UsersRepository
 *
 * @author yosemite_tanguy
 */
class UsersRepository extends RepositoryAbstract
{
    protected function getTable()
    {
        return 'users';
    }
    
    public function findByEmail($email) {
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM users WHERE email = :email',
            [
                ':email' => $email
            ]
        );
    
        if(!empty($dbUser)) {
            return $this->buildEntity($dbUser);
        }
    }
    
    public function save(Users $user)
    {
        // les données à enregistrer en BDD
        $data = [
//            'firstname' => $user->getFirstname(),            
//            'lastname' => $user->getLastname(),
//            'gender' => $user->getGender(),
//            'pseudo' => $user->getPseudo(),

            'email' => $user->getEmail(),
            'password' => $user->getPassword()
                
//            'pseudo' => $user->getStatus()
        ];
        
        // si la category a un id, on est en update
        // sinon en insert
        $where = !empty($user->getId())
            ? ['id' => $user->getId()]
            : NULL
        ;
        
        // appel à la méthode de RepositoryAbstract pour enregistrer
        $this->persist($data, $where);
        
        // on set l'id quand on est en insert
        if (empty($user->getId())) {
            $user->setId($this->db->lastInsertId());
        }
            
    }
    
    private function buildEntity(array $data)
    {
        $user = new Users();
        
        $user
            ->setId($data['id'])
            ->setFirstname($data['firstname'])
            ->setLastname($data['lastname'])
            ->setGender($data['gender'])
            ->setPseudo($data['pseudo'])
            ->setEmail($data['email'])
            ->setPassword($data['password'])
            ->setStatus($data['status'])
        ;
        
        return $user;
    }
    

}
