<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('label_status')) {

    function label_status($data = 0) {
        if($data == 0){
            return '<span class="label label-danger jq-status">inativo</span>';
        }
        return '<span class="label label-success jq-status">ativo</span>';
    }

}

if (!function_exists('nav_active')) {

    function nav_active($url = 'painel') {
        $caminho = trim(str_replace('?' . $_SERVER['QUERY_STRING'], '', $_SERVER['REQUEST_URI']), '/');
        $url = trim($url, '/');
        $http_url = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $caminho;
        $https_url = 'https://' . $_SERVER['HTTP_HOST'] . '/' . $caminho;
        if((strpos($caminho, $url) !== false) ||
           (strpos($http_url, $url) !== false) ||
           (strpos($https_url, $url) !== false) ){
            return 'active';
        }
        return '';
        /*
        if($data == 0){
            return '<span class="label label-danger jq-status">inativo</span>';
        }
        return '<span class="label label-success jq-status">ativo</span>';*/
    }

}
