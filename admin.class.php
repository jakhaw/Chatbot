<?php

class Login extends Db{

    protected function checkAdmin($username){
        $query = $this->connect()->prepare("SELECT password FROM admin WHERE username = :username");
        $query->execute(array("username" => $username));
        
        if($query->rowCount() === 0){
            $query = null;
            exit();
        }
    }
}