<?php
include '../Model/ClientMoral.php';
include '../DAO/ClientMoralDAO.php';

function listCM()
{
    $clientM=new ClientMoralDAO();
    $listclientM=$clientM->foundAll();
    return $listclientM;
}

$listStatut=listStatutClient();
if($listStatut!=null)
{
    echo "<select name='statutcp' id='statutcp' class='slct2 selectclt' onchange='salaryForm()'>";
    echo "<option value='0'>--Statut Client--</option>";
    while ($resultat=$listStatut->fetch(PDO::FETCH_ASSOC))
    {
        $val=$resultat['id'];

        echo "<option value='$val'>".$val."-".$resultat['libelle']."</option>";
    }
    echo "</select>";
}
