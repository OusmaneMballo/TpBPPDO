<?php
include '../Model/ClientMoral.php';
include '../Model/ClientPhysique.php';
include '../DAO/ClientMoralDAO.php';
include '../DAO/ClientPhysiqueDAO.php';
if(isset($_POST) && !empty($_POST))
{
    /*
    *
    * On test pour savoir si c'est un client
    * moral ou un client physique
    *
    * */
    if($_POST['typeclient']==2)
    {
        if(addCM()!=null)
        {
            header('Location:client');
        }
        else
        {
            echo "Erreur d'ajout! client moral...";
        }
    }
    else
    {
        if(addCP()!=null)
        {
            header('Location:client');
        }
        else{
            echo "Erreur d'ajout! client physique...";
        }
    }

}

//======================Fonctions==========================
function addCM()
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
    if($result>0)
    {
        return $result;
    }
    return null;
}

function addCP()
{
    $clientP=new ClientPhysique();
    $dao=new ClientPhysiqueDAO();

    $clientP->setPasswd($_POST['passwdcp']);
    $clientP->setLogin($_POST['logincp']);
    $clientP->setEmail($_POST['emailcp']);
    $clientP->setAdresse($_POST['adressecp']);
    $clientP->setNom($_POST['nomcp']);
    $clientP->setPrenom($_POST['prenomcp']);
    $clientP->setTelephone($_POST['telephonecp']);
    $clientP->setNci($_POST['cnicp']);

     //Test si on a un salarier
   if($_POST['statutcp']==1)
    {
         $clientP->setTypeClient($_POST['statutcp']);
         $clientP->setSalaire($_POST['salairecp']);
         $clientP->setProfession($_POST['professioncp']);
         //Test si on a un salarier dont sont employeur est un client de la banque
         if($_POST['employeur']!=3)
         {
             $clientP->setEmployeur($_POST['employeur']);
         }
         else
         {
             //Cas d'un employeur inexistant pour un nouveau salarier
             //Ajout de l'employeur puis on recupere son id $idEmp
             $idEmp=addCM();
             $clientP->setEmployeur($idEmp);
         }

    }
    $result=$dao->addCP($clientP);
    if($result)
    {
        return $result;
    }
    else{
        return null;
    }
}
