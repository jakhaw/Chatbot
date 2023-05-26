<?php

class OptionListContr extends OptionList{

    private $list;

    public function getList(){
        $this->list = $this->getOptions();
        return $this->list;
    }
}