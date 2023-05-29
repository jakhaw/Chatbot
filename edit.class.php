<?php

class Edit extends Db{
    
    protected function editOption($tip, $answer, $id){
        $query = $this->connect()->prepare("UPDATE bot SET tips = :tips, answer = :answer WHERE id = :id");

        if(!$query->execute(["tips" => $tip, "answer" => $answer, "id" => $id])){
            $query = null;
            header('Location: adminpanel.php?error=stmtfailed');
            exit();
        }

        $query = null;
    }
}