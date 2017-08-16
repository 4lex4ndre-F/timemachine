<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Repository;

use Entity\Pictures;

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
        $query = 'SELECT * FROM pictures';
        
//        $query = <<<EOS
//SELECT * FROM article a
//JOIN category c ON a.category_id = c.id
//EOS;

        
        $dbPictures = $this->db->fetchAll($query);
        
        $pictures = [];
        
        foreach ($dbPictures as $dbPicture){
            /**********************************
             ******  ON FACTORISE *************
             ********************************* */
            /*
            $article = new Article(); // \Entity\Article => clic droit fixuses
            
            
            $article
                    ->setId($dbArticle['id'])
                    ->setTitle($dbArticle['title'])
                    ->setHeader($dbArticle['header'])
                    ->setContent($dbArticle['content'])
            ;
            

                   /*****  PAR  *****/ 
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
