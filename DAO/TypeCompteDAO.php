<?php

include '../DAO/AccessdbDAO.php';
class TypeCompteDAO
{

    /**
     * TypeCompteDAO constructor.
     */
    public function __construct()
    {
    }

    public function findAll()
    {
        $db=new AccessdbDAO();
        $requete="SELECT * FROM `type_compte`";
        return $db->execute($requete);
    }
}