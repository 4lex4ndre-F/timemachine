<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Repository;

use Entity\Pictures;
use Entity\Users;

/**
 * Description of PicturesRepository
 *
 * @author yosemite_tanguy
 */
class PicturesRepository extends RepositoryAbstract
{
    protected function getTable()
    {
        return 'pictures';
    }
    
    public function findAll()
    {
        // $query = 'SELECT * FROM pictures';
        
        $query = <<<EOS
SELECT * FROM pictures p
JOIN users u ON p.users_id = u.id
EOS;
        
        $dbPictures = $this->db->fetchAll($query);
        
        $pictures = [];
        
        foreach ($dbPictures as $dbPicture){
            
            $picture = $this->buildEntity($dbPicture); 
            
            $pictures[] = $picture;
                   
        }
        
        return $pictures;
            
    }    
    public function buildEntity(array $data)
    {
//        $story = new Stories();
//        
//        $story
//                ->setId($data['category_id'])
//                ->setName($data['name'])
//        ;
        
        $user = new Users();
        
            $user
                    ->setId($data['id'])
//                    ->setFirstname($data['firstname'])
//                    ->setLastname($data['lastname'])
//                    ->setGender($data['gender'])
//                    ->setPseudo($data['pseudo'])
//                    ->setEmail($data['email'])
//                    ->setPassword($data['password'])
//                    ->setStatus($data['status'])
        ;
        
        $picture = new Pictures();
            
            $picture
                    ->setId($data['id'])
                    ->setUsers_Id($data['users_id'])
                    ->setPhoto($data['photo'])
                    ->setTitle($data['title'])
                    ->setHeader($data['header'])
                    ->setContent($data['content'])
                    ->setDate_Record($data['date_record'])
                    ->setDate_Picture($data['date_picture'])
                    ->setCountry($data['country'])
                    ->setCity($data['city'])
                    
//                    ->setCategory($category)
            ;
            
        return $picture;
        
    }
}
