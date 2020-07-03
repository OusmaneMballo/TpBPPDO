<?php
/*=============Inclusion du headeer===============*/
include '../Layout/Header.php';
/*===================Fin headeer===================*/

/*=============Inclusion du sidebarre===============*/
include '../Layout/SideBarre.php';
/*===================Fin sidebarre===================*/
?>
<!--===================Debut Body===================-->
<article class="content">
    <fieldset>
        <legend>Creation Compte</legend>
        <form method="post" onsubmit="return post()" class="form" action="traittementcompte.php">
            <div class="row">
                <select name='typecp' id='typecp' class='selectcmpt' onchange='frais()'>
                    <option value='0'>--Type Compte--</option>

                </select>

<!--            include './listTypeCompte.php';-->

                <label for="solde">Solde</label>
                <input type="text" class="inputcl" id="solde" name="solde"/>
            </div>
            <div class="row">
                <label for="frai">Frais:<b id="frai"></b></label>
                <select name='client' id='client' class='selectcmpt'>
                <option value='0'>-------List des Clients--------</option>
                <option disabled>--------Client Moral------------</option>
                </select>

                <!--echo "<select name='client' id='client' class='selectcmpt'>";
                echo "<option value='0'>-------List des Clients--------</option>";
                echo "<option disabled>--------Client Moral------------</option>";
                include './traittementcompte.php';
                echo "</select>";-->


            </div>
            <div class="row">
                <button type="submit" class="valider">Ajouter</button>
                <button type="reset" class="annuler">Annuler</button>
            </div>
        </form>
    </fieldset>
</article>
<script src="http://localhost/MesProjets/Simplon/TPCompteClientPDO/Public/js/compte.js"></script>
<script src="http://localhost/MesProjets/Simplon/TPCompteClientPDO/Public/js/main.js"></script>
</body>
</html>
