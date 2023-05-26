<?php

class OptionList extends Db{
    
    protected function getOptions(){
        $query = $this->connect()->prepare("SELECT * FROM bot");

        if(!$query->execute()){
            $query = null;
            header('Location: adminpage.php?error=stmtfailed');
            exit();
        }

        $options = $query->fetchAll();
        return $options;
    }
}