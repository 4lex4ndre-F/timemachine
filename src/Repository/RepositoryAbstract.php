<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Repository;

use Silex\Application;

/**
 * Description of RepsitoryAbstract
 *
 * @author yosemite_tanguy
 */
abstract class RepositoryAbstract
{
    /**
     *
     * @var \Doctrine\DBAL\Connection
     */
    protected $db;
    
    /**
     * 
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->db = $app['db'];
    }
    
    public function persist(array $data, array $where = null)
    {
        if (is_null($where)) {
            // insertion
            $this->db->insert($this->getTable(), $data);
        } else {
            // modification
            $this->db->update($this->getTable(), $data, $where);
        }
    }
    
    /**
     * Oblige les class enfants à définir cette méthode
     * qui renvoit le nom de la table à laquelle elle font référence
     */
    abstract protected function getTable();
}
