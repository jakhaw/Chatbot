<?php

class Add extends Db{
    protected function addOption ($tip, $answer){
        $query = $this->connect()->prepare("INSERT INTO bot (tips, answer) VALUES (:tips, :answer)");

        if(!$query->execute(["tips" => $tip, "answer" => $answer])){
            $query = null;
            header("Location: adminpanel.php?error=stmtfailed");
            exit();
        }

        $query = null;
    }
}