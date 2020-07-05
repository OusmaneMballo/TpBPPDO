<?php
include '../Model/ClientMoral.php';
include '../DAO/ClientMoralDAO.php';
if(isset($_POST) && !empty($_POST))
{
    $clientM=new ClientMoral();
    $dao=new ClientMoralDAO();
    $clientM->setNom($_POST['nomCM']);
    $clientM->setRaisonSocial($_POST['raisonSocialCM']);
    $clientM->setDentifiant($_POST['identifiantCM']);
    $clientM->setTelephone($_POST['telephoneCM']);
    $clientM->setAdresse($_POST['adresseCM']);
    $clientM->setEmail($_POST['emailCM']);
    $clientM->setLogin($_POST['loginCM']);
    $clientM->setPasswd($_POST['passwdCM']);
    $result=$dao->addCM($clientM);
    if($result)
    {
        echo "Client Moral Ajoute!...";
    }
    else
    {
        echo "Client non Ajoute!...";
    }
}
