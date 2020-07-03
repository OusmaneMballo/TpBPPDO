<?php


class Compte
{
    private $id;
    private $numero;
    private $cle_ripe;
    private $agence;
    private $solde;
    private $etat;
    private $clientP;
    private $clientM;
    private $date_creat;
    private $date_ferm;
    private $date_ferme_tempo;
    private $date_ouvert;
    private $typeCompte;

    /**
     * Compte constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getCleRipe()
    {
        return $this->cle_ripe;
    }

    /**
     * @param mixed $cle_ripe
     */
    public function setCleRipe($cle_ripe)
    {
        $this->cle_ripe = $cle_ripe;
    }

    /**
     * @return mixed
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * @param mixed $agence
     */
    public function setAgence($agence)
    {
        $this->agence = $agence;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param mixed $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getClientP()
    {
        return $this->clientP;
    }

    /**
     * @param mixed $clientP
     */
    public function setClientP($clientP)
    {
        $this->clientP = $clientP;
    }

    /**
     * @return mixed
     */
    public function getClientM()
    {
        return $this->clientM;
    }

    /**
     * @param mixed $clientM
     */
    public function setClientM($clientM)
    {
        $this->clientM = $clientM;
    }

    /**
     * @return mixed
     */
    public function getDateCreat()
    {
        return $this->date_creat;
    }

    /**
     * @param mixed $date_creat
     */
    public function setDateCreat($date_creat)
    {
        $this->date_creat = $date_creat;
    }

    /**
     * @return mixed
     */
    public function getDateFerm()
    {
        return $this->date_ferm;
    }

    /**
     * @param mixed $date_ferm
     */
    public function setDateFerm($date_ferm)
    {
        $this->date_ferm = $date_ferm;
    }

    /**
     * @return mixed
     */
    public function getDateFermeTempo()
    {
        return $this->date_ferme_tempo;
    }

    /**
     * @param mixed $date_ferme_tempo
     */
    public function setDateFermeTempo($date_ferme_tempo)
    {
        $this->date_ferme_tempo = $date_ferme_tempo;
    }

    /**
     * @return mixed
     */
    public function getDateOuvert()
    {
        return $this->date_ouvert;
    }

    /**
     * @param mixed $date_ouvert
     */
    public function setDateOuvert($date_ouvert)
    {
        $this->date_ouvert = $date_ouvert;
    }

    /**
     * @return mixed
     */
    public function getTypeCompte()
    {
        return $this->typeCompte;
    }

    /**
     * @param mixed $typeCompte
     */
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;
    }

}