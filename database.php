<?php

class Db {

    private $host = 'localhost';
    private $db_name = 'chatbot';
    private $password = '';
    private $user = 'root';
    private $options = [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC];

    protected function connect(){
        try{
            $dsn = "mysql:host=".$this->host.";dbname=".$this->db_name;
            $conn = new PDO($dsn, $this->user, $this->password, $this->options);
            return $conn;
        }catch(PDOException $e){
            echo "Error!: ".$e->getMessage();
        }
    }
}