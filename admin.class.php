<?php

class Login extends Db{

    protected function getAdmin($username, $password){
        $query = $this->connect()->prepare("SELECT password FROM admin WHERE username = :username");
        if(!$query->execute(["username" => $username])){
            $query = null;
            header('Location: adminpage.php?error=stmtfailed');
            exit();
        }
        
        if($query->rowCount() === 0){
            $query = null;
            $_SESSION['error'] = "Incorrect username or password";
            header('Location: index.php?error=usernotfound');
            exit();
        }

        $passwordFromDB = $query->fetchAll();

        if($passwordFromDB[0]['password'] !== $password){
            $query = null;
            $_SESSION['error'] = "Incorrect username or password";
            header('Location: index.php?error=loginfailed');
            exit();
        }elseif($passwordFromDB[0]['password'] === $password){
            $_SESSION['login'] = true;
            $query = null;
        }

        $query = null;
    }
}