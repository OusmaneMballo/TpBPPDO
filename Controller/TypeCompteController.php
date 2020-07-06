<?php
include '../DAO/TypeCompteDAO.php';
function listTypeCompte()
{
    $typeCmpte=new TypeCompteDAO();
    return $typeCmpte->findAll();
}

//==================================Fin fonction====================================
$listTypeCompte=listTypeCompte();
if($listTypeCompte!=null)
{
    echo "<select name='typecp' id='typecp' class='selectcmpt' onchange='frais()'>";
    echo "<option value='0'>--Type Compte--</option>";
    while ($resultat=$listTypeCompte->fetch(PDO::FETCH_ASSOC))
    {
        $val=$resultat['id'];

        echo "<option value='$val'>".$val."-".$resultat['libelle']."</option>";
    }
    echo "</select>";
}