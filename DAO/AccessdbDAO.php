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

    /**
     * @param $cnx
     * @param $requete
     * @return mixed
     * On lui passe la chaine de connexion et une requete INSERT, UPDATE,
     * ou DELETE
     * puis elle nous retourne un prepareteStatement
     */
    public function MAJ($cnx, $requete)
    {
        return $cnx->prepare($requete);
    }

    /**
     * @param $requete
     * @return mixed
     * On la passe une requete SELECT, et elle nous
     * retourne un tableau associatif.
     */
    public function execute($requete)
    {
        return $this->getConnexion()->query($requete);
    }

}