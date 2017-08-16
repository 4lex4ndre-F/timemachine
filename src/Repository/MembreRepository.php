<?php


namespace Repository;

use Entity\membre;

/**
 * Les requetes de base seront regroupées ici sous-forme de méthode
 * (ex: methode findAll correspond à une requete SELECT * FROM table)
 *
 * @author Etudiant
 */
class MembreRepository extends RepositoryAbstract{
    
    protected function getTable() 
    {
        return 'users';
    }
    
    public function testFindAll()
    {
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM users');
          
        return $this->buildEntity($dbUser);
    }
    
    public function findByEmail($email)
    {
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM users WHERE email = :email',
            [
                ':email' => $email
            ]
        );
        
        if (!empty($dbUser)) {
            return $this->buildEntity($dbUser);
        }
    }
    
    
    
     /**
     * 
     * @param array $data
     * @return membre
     */
    private function buildEntity(array $data)
    {
        $user = new membre();
        
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
