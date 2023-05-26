<?php

class LoginContr extends Login{

    private $username, $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function loginAdmin(){
        if(!$this->spellingError()){
            $_SESSION['error'] = "Incorrect username or password";
            header('Location: adminpage.php?error=loginfailed');
            exit();
        }

        $this->getAdmin($this->username, $this->password);
    }

    private function spellingError(){
        $result = true;
        if(!ctype_alnum($this->username) || !ctype_alnum($this->password)){
            $result = false;
        }
        return $result;
    }
}