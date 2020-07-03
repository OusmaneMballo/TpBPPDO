<?php


class FraisBancaire
{
    private $id;
    private $frai_bancaire;
    private $date;
    private $type_frai;
    private $compte;

    /**
     * FraisBancaire constructor.
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
    public function getFraiBancaire()
    {
        return $this->frai_bancaire;
    }

    /**
     * @param mixed $frai_bancaire
     */
    public function setFraiBancaire($frai_bancaire)
    {
        $this->frai_bancaire = $frai_bancaire;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTypeFrai()
    {
        return $this->type_frai;
    }

    /**
     * @param mixed $type_frai
     */
    public function setTypeFrai($type_frai)
    {
        $this->type_frai = $type_frai;
    }

    /**
     * @return mixed
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * @param mixed $compte
     */
    public function setCompte($compte)
    {
        $this->compte = $compte;
    }

}