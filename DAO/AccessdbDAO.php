<?php


class AccessdbDAO
{
    private $cnx;

    /**
     * AccessdbDAO constructor.
     */
    public function __construct()
    {
    }
    public function getConnexion()
    {
        $Dbname="bp_groupe2";
        $host="localhost";
        $user="root";
        $password="";
        $dsn="mysql: host=".$host.";dbname=".$Dbname;
        $this->cnx=null;
        try{
            $this->cnx=new PDO($dsn,$user,$password);
        }catch(PDOException $e){
            die ("erreur de connection a la base de donnee");
        }
        return $this->cnx;
    }

    public function MAJ($requete)
    {
        return $this->getConnexion()->prepare($requete);
    }
    public function execute($requete)
    {
        return getConnexion()->query($requete)->fetch(PDO::FETCH_ASSOC);
    }

}