<?php


class TypeFrai
{
    private $id;
    private $libelle;
    private $frai;

    /**
     * TypeFrai constructor.
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
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getFrai()
    {
        return $this->frai;
    }

    /**
     * @param mixed $frai
     */
    public function setFrai($frai)
    {
        $this->frai = $frai;
    }

}