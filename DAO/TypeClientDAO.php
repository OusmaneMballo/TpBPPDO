<?php

include '../DAO/AccessdbDAO.php';
class TypeClientDAO
{

    /**
     * TypeClientDAO constructor.
     */
    public function __construct()
    {
    }

    public function findAll()
    {
        $db=new AccessdbDAO();
        $requete="SELECT * FROM `type_client`";
        return $db->execute($requete);
    }
}