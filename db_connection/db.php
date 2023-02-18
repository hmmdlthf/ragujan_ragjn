<?php

class Db
{
    private $servername;
    private $dbname;
    private $password;
    private $port;
    private $username;

    public function connect()
    {   

        $this->servername = "localhost";
        $this->dbname = "u793985497_ragjn_database";
        $this->password = "Ragujan123@";
        $this->port = 3306;
        $this->username = "u793985497_ragujan";

   
        try {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname;
            $pdo = new PDO($dsn,$this->username,$this->password);
            $pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
       
            return $pdo;
           
        } catch (PDOException $th) {
            echo "Connection Failed"."".$th->getMessage();
        }
    }
}



