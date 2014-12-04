<?php

if (!defined('BASEPATH')){
    exit('No direct script access allowed');
}

class Hospital_m extends MY_Model {
    
    function __construct($tabela = 'hospital') {
        parent::__construct($tabela);
    }
    
    function getCnesId($data){
        $this->set_where('cnes_id', $data['cnes_id']);
        return parent::fetch_all();
    }

    function buscarPorLocalizacao($data, $page){
        $offset = (int) addslashes($page['offset']);
        $per_page = (int) addslashes($page['per_page']);
        if(isset($data['filtro']) && $data['filtro'] != ''){
            $filtro = $data['filtro'];
        }else{
            $filtro = '';
        }

        if($offset < 0){
           return false;
           exit();
        }

        $sql = "SELECT FLOOR(Geo(".addslashes($data['latitude']).", ".addslashes($data['longitude']).",latitude, longitude)) AS distancia, hospital.* , hospital.nota_def_idoso as deficiente
                FROM hospital
                WHERE excluido = 0 ".$filtro."
                ORDER BY distancia asc, deficiente desc  
                LIMIT ".$offset.",".$per_page;

    	$query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
}