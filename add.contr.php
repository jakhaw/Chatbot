<?php

class AddContr extends Add{

    private $tip, $answer;

    public function __construct($tip, $answer){
        $this->tip = $tip;
        $this->answer = $answer;
    }

    public function add(){
        $this->addOption($this->tip, $this->answer);
    }
}