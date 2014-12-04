<?php

if (!defined('BASEPATH')){
    exit('No direct script access allowed');
}

class MY_Xml{
    
    private $arquivo;

    function __construct($arquivo){
        $this->arquivo = $arquivo;
    }

    private function openXML(){
        return simplexml_load_file($this->arquivo);
    }

}