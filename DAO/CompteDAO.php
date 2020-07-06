<?php

include '../DAO/AccessdbDAO.php';
class CompteDAO
{

    /**
     * CompteDAO constructor.
     */
    public function __construct()
    {
    }

    public function add($compte)
    {
        $db=new AccessdbDAO();
        $requete="INSERT INTO `compte_client`(`id`, `numeroCte`, `clerib`, 
                `agence_id`, `solde`, `etat`, `cltphy_id`, `cltmoral_id`, 
                `datecrea`, `dateferme`, `datefertempo`, `datereouv`, 
                `id_type`)
                 VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?);";
        $cnx=$db->getConnexion();
        $prepare=$db->MAJ($cnx,$requete);
        try {
            $result=$prepare->execute(array($compte->getNumero(),$compte->getCleRipe(),
                1,$compte->getSolde(),'Actif', $compte->getClientP(), $compte->getClientM(), date('d-m-y'),
                null, null, null, $compte->getTypeCompte()));
            return $cnx->lastInsertId();
        }catch(Exception  $e){
            return null;
        }
    }
}