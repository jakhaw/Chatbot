<?php

class EditContr extends Edit{
    
    private $tip, $answer, $id;

    public function __construct($tip, $answer, $id){
        $this->tip = $tip;
        $this->answer = $answer;
        $this->id = $id;
    }

    public function edit(){
        $this->editOption($this->tip, $this->answer, $this->id);
    }
}