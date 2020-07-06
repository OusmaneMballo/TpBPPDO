<?php
include '../DAO/ClientMoralDAO.php';
include '../DAO/ClientPhysiqueDAO.php';
include '../Model/Compte.php';
include '../DAO/CompteDAO.php';

function add()
{
    $compte=new Compte();
    $comptDAO=new CompteDAO();

}

function listCM()
{
    $clientM=new ClientMoralDAO();
    $listclientM=$clientM->foundAll();
    return $listclientM;
}

function listCP()
{
    $clientP=new ClientPhysiqueDAO();
    $listclientP=$clientP->findAll();
    return $listclientP;
}

//========================Fin fonction========================
$listclientM=listCM();
$listclientP=listCP();
if($listclientM!=null)
{
    while ($resultat=$listclientM->fetch(PDO::FETCH_ASSOC))
    {
        $val=$resultat['id']."-cm";
        echo "<option value='$val'>".$resultat['nom']."-".$resultat['raison_social']."</option>";
    }
}
echo "<option disabled>--------Client Physique------------</option>";
if($listclientP!=null)
{
    while ($resultat=$listclientP->fetch(PDO::FETCH_ASSOC))
    {
        $val=$resultat['id']."-cp";

        echo "<option value='$val'>".$resultat['nci']."-".$resultat['prenom']."-".$resultat['nom']."</option>";
    }
}
