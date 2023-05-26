<?php

class Question extends Db{

    protected function getQuestion($question){
        $stmt = $this->connect()->prepare("SELECT answer FROM bot WHERE tips LIKE :question");

        if(!$stmt->execute(['question' => "%".$question."%"])){
            $stmt = null;
            header('Location: index.php?error=stmtfailed');
            exit();
        }

        if($stmt->rowCount() === 0){
            $stmt = null;
            header('Location: index.php?error=answernotfound');
            exit();
        }

        $answerFromDB = $stmt->fetchAll();
        $_SESSION['answer'] = $answerFromDB[0]['answer'];
        $stmt = null;
    }
}