<?php

//include '../DAO/AccessdbDAO.php';
class ClientPhysiqueDAO
{

    /**
     * ClientPhysiqueDAO constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param $clientP
     * fonction d'ajout d'un client physique
     */
    public function addCP($clientP)
    {
        $db = new AccessdbDAO();
        $requete = "INSERT INTO `client_physique`(`id`, `nom`, `prenom`,
                    `telephone`, `salaire`, `adresse`, `profession`,
                     `login`, `password`, `email`, `nci`, `typeclt_id`,
                      `cltmoral_id`) 
                      VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)";
        $cnx = $db->getConnexion();
        $prepare = $db->MAJ($cnx, $requete);
        try {
            $result = $prepare->execute(array($clientP->getNom(), $clientP->getPrenom(),
                $clientP->getTelephone(), $clientP->getSalaire(), $clientP->getAdresse(),
                $clientP->getProfession(), $clientP->getLogin(), $clientP->getPasswd(),
                $clientP->getEmail(),$clientP->getNci(), $clientP->getTypeClient(), $clientP->getEmployeur()));
            return $cnx->lastInsertId();
        } catch (Exception  $e) {
            echo $e;
            return null;

        }
    }

        public function findAll()
        {
            $db=new AccessdbDAO();
            $requete="SELECT * FROM `client_physique`";
            return $db->execute($requete);
        }
}