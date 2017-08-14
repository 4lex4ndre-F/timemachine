<?php


namespace Repository;

/**
 * Connexion à la bdd
 *
 * @author Etudiant
 */


namespace Repository;

use Silex\Application;

abstract class RepositoryAbstract
{
    /**
     *
     * @var \doctrine\DBAL\Connection
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

    // méthode qui va définir si on edite ou ajoute une catégorie
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
     * Oblige les classses filles à définir cette methode
     * qui renvoie le nom de la table à laquelle elles font référence
     */
    abstract protected function getTable();
}
