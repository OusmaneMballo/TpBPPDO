<?php
include '../DAO/AccessdbDAO.php';

class ClientMoralDAO
{
    /**
     * ClientMoralDAO constructor.
     */
    public function __construct()
    {
    }

    /**
     * Ajout d'un client moral
     * @param $clientM
     */
    public function addCM($clientM)
    {
        $db=new AccessdbDAO();
        $requete="INSERT INTO `client_moral`(`id`, `raison_social`,
                                `nom`, `adresse`, `numidentf`, `telephone`, 
                                `email`, `login`, `password`)
                    VALUES (null ,? ,? ,? ,? ,? ,? ,? ,?)";
        $cnx=$db->getConnexion();
        $prepare=$db->MAJ($cnx,$requete);
        try {
            $result=$prepare->execute(array($clientM->getRaisonSocial(),$clientM->getNom(),
                $clientM->getAdresse(),$clientM->getDentifiant(),$clientM->getTelephone(),
                $clientM->getEmail(), $clientM->getLogin(), $clientM->getPasswd()));
            return $cnx->lastInsertId();
        }catch(Exception  $e){
                return null;
        }
    }

    public function foundAll()
    {
        $db=new AccessdbDAO();
        $requete="SELECT * FROM `client_moral`";
        return $db->execute($requete);
    }
}