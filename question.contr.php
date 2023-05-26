<?php

class QuestionContr extends Question{

    private $question;

    public function __construct($question){
        $this->question = $question;
    }

    public function answer(){
        $questionSanitize = filter_var($this->question, FILTER_SANITIZE_SPECIAL_CHARS);
        $this->getQuestion($questionSanitize);
    }
}