<?php
include '../Model/ClientMoral.php';
include '../DAO/ClientMoralDAO.php';

function listCM()
{
    $clientM=new ClientMoralDAO();
    $listclientM=$clientM->foundAll();
    return $listclientM;
}

$listclientM=listCM();
if($listclientM!=null)
{
    echo "<select name='employeur' id='employeur' class='slct2 selectclt' onchange='employeurForm()'>";
    echo "<option value='0'>--Employer--</option>";
    while ($resultat=$listclientM->fetch(PDO::FETCH_ASSOC))
    {
        $val=$resultat['id'];

        echo "<option value='$val'>".$val."-".$resultat['nom']."</option>";
        echo "<hr/>";
    }
    echo "</select>";
}
