<?php

if (!function_exists('resulttoarray')) {
    function resulttoarray($result, $indice, $valor, $vazio = true) {
        $dados = array();
        if ($vazio == true) {
            $dados[''] = '-';
        }
        
        if(!$result){
            return $dados;
        }
        
        foreach($result as $k => $v){
            $dados[$v->$indice] = $v->$valor;
        }
        return $dados;
    }
}

if (!function_exists('value_null')) {
    function value_null($value) {
        if((!$value) || ($value == 0)){
            return null;
        }
        return $value;
    }
}
