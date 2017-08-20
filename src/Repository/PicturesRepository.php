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
    
    public function find($id)
    {
        $query = 'SELECT * FROM pictures p'
                . ' JOIN users u ON p.users_id = u.id'
                . ' WHERE p.id = :id'
        ;
                
        $dbPictures = $this->db->fetchAssoc(
            $query,
        [
            ':id' => $id
        ]
        );
        if(!empty($dbPictures)){
            return $this->buildEntity($dbPictures);
        }
    }
    
    public function save(Pictures $picture)
    {
        // les données à enregistrer en BDD
        $data  = [
                    'users_id' => $picture->getUsers_id(),
                    'photo' => $picture->getPhoto(),
                    'title' => $picture->getTitle(),
                    'header' => $picture->getHeader(),
                    'content' => $picture->getContent(),
                    'date_record' => $picture->getDate_record(),
                    'date_picture' => $picture->getDate_picture(),
                    'country' => $picture->getCountry(),
                    'city' => $picture->getCity(),
                    //'category_id' => $article->getCategoryId()
                ];
        
        // si la category a un id, on est en update
        // sinon en insert
        $where = !empty($picture->getId())
            ? ['id' => $picture->getId()]
            : NULL
        ;
        
        // appel à la méthode de RepositoryAbstract pour enregistrer
        $this->persist($data, $where);
        
        // on set l'id quand on est en insert
        if (empty($picture->getId())) {
            $picture->setId($this->db->lastInsertId());
        }
            
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
                    ->setUsers_id($data['users_id'])
                    ->setPhoto($data['photo'])
                    ->setTitle($data['title'])
                    ->setHeader($data['header'])
                    ->setContent($data['content'])
                    ->setDate_record($data['date_record'])
                    ->setDate_picture($data['date_picture'])
                    ->setCountry($data['country'])
                    ->setCity($data['city'])
                    
//                    ->setCategory($category)
            ;
            
        return $picture;
        
    }
}
