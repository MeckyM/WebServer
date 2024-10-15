<?php

class conect
{
    private $host;
    private $dbname;
    private $password;
    private $user;
    private $port;

    function __construct()
    {
        $this->host = "localhost";
        $this->dbname = "data";
        $this->password = "123456";
        $this->user = "postgres";
        $this->port = "5433";
    }

    public function ConectarBanco()
    {
        try
        {
            $PDO = new PDO("pgsql:host=".$this->host.";port=".$this->port.";dbname=".$this->dbname,$this->user,$this->password);
            echo "tudo OK";
            return($PDO);
        }
        catch(PDOexception $erro)
        {
            $msg = 'Falha no acesso com PostGres:'.$erro->getMessage();
            echo $msg;
            return(NULL);
        }
    }
}

?>