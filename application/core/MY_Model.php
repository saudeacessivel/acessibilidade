<?php

if (!defined('BASEPATH')){
    exit('No direct script access allowed');
}

include('MY_Model_base.php');

class MY_Model extends MY_Model_base {

    /**
     * Constructor
     *
     * @access public
     */
    function __construct($tabela = null) {
        parent::__construct($tabela);
        log_message('debug', "Model Class Initialized");
    }

    /**
     * __get
     *
     * Allows models to access CI's loaded classes using the same
     * syntax as controllers.
     *
     * @param	string
     * @access private
     */
    function __get($key) {
        $CI = & get_instance();
        return $CI->$key;
    }

    public function count_all_results() {
        $this->db->where($this->tabela . '.excluido', 0);
        return $this->db->count_all_results($this->tabela);
    }
    
    public function count_all_results_restaurar() {
        $this->db->where($this->tabela . '.excluido', 1);
        return $this->db->count_all_results($this->tabela);
    }

    public function fetch_all() {
        $this->db->select($this->tabela . '.*');
        $this->db->where($this->tabela . '.excluido', 0);
        $query = $this->db->get($this->tabela);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    public function fetch_all_restaurar() {
        $this->db->select($this->tabela . '.*');
        $this->db->where($this->tabela . '.excluido', 1);
        $query = $this->db->get($this->tabela);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function fetch_all_all() {
        $this->db->select($this->tabela . '.*');
        $query = $this->db->get($this->tabela);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    public function get_to_select($campos = array('id', 'nome')){
        $this->db->select($this->tabela . '.*');
        $this->db->where($this->tabela . '.excluido', 0);
        $this->db->order_by($campos[1]);
        $query = $this->db->get($this->tabela);
        if ($query->num_rows() > 0) {
            $data = array('' => '-');
            foreach ($query->result() as $row) {
                $data[$row->$campos[0]] = $row->$campos[1];
            }
            return $data;
        }
        return array('' => '-');
    }
    
    public function get_to_select_parent($campo = null, $valor = null, $campos = array('id', 'nome')){
        if(is_array($campo)){
            $this->db->where($campo);
            return $this->get_to_select($campos);
        }
        
        if($campo && $valor){
            $this->db->where($campo, $valor);
            return $this->get_to_select($campos);
        }
        return array('' => '-');
    }    
        
    public function inserir($data){
        $data['data_cadastro'] = date('Y-m-d H:i:s');
        $data['data_atualizacao'] = date('Y-m-d H:i:s');
        $data['excluido'] = 0;
        $data['data_excluido'] = NULL;
        
        if ($this->db->insert($this->tabela, $data)) {
            return array('insert_id' => $this->db->insert_id());
        } 
        return array('erro' => $this->db->_error_message() . ' (' . $this->db->_error_number() . ')');
    }
    
    public function alterar($data){
        $data['data_atualizacao'] = date('Y-m-d H:i:s');
        $data['excluido'] = 0;
        $data['data_excluido'] = NULL;        
        
        $this->db->where($this->tabela . '.id', $data['id']);
        $db_result = $this->db->update($this->tabela, $data);
        
        if (!$db_result) {
            return array('erro' => $this->db->_error_message() . ' (' . $this->db->_error_number() . ')');
        } 
        
        if (!$this->db->affected_rows()) {
            return false; /* deu certo mas não atualizou nada */
        } 
        return array('sucesso' => 'Dados atualizados com sucesso');
    }
    
    public function remover($id){
        $data[$this->tabela . '.excluido'] = 1;
        $data[$this->tabela . '.data_excluido'] = date('Y-m-d H:i:s');
        if(is_array($id)){
            $this->db->where_in($this->tabela . '.id', $id);
        }
        else {
            $this->db->where($this->tabela . '.id', $id);
        }
        
        $db_result = $this->db->update($this->tabela, $data);
        if (!$db_result) {
            return array('erro' => $this->db->_error_message() . ' (' . $this->db->_error_number() . ')');
        } 
        
        if (!$this->db->affected_rows()) {
            return false; 
        } 
        
        return array('sucesso' => 'Dados removidos com sucesso');
    }

    public function remover_varios(){
        
        $data[$this->tabela . '.excluido'] = 1;
        $data[$this->tabela . '.data_excluido'] = date('Y-m-d H:i:s');

        $db_result = $this->db->update($this->tabela, $data);

        if (!$db_result) {
            return array('erro' => $this->db->_error_message() . ' (' . $this->db->_error_number() . ')');
        } 
        
        if (!$this->db->affected_rows()) {
            return false; 
        } 
        
        return array('sucesso' => 'Dados removidos com sucesso');

    }
    
    public function restaurar($id){
        $data[$this->tabela . '.excluido'] = 0;
        $data[$this->tabela . '.data_excluido'] = null;
        if(is_array($id)){
            $this->db->where_in($this->tabela . '.id', $id);
        }
        else {
            $this->db->where($this->tabela . '.id', $id);
        }
        
        $db_result = $this->db->update($this->tabela, $data);
        if (!$db_result) {
            return array('erro' => $this->db->_error_message() . ' (' . $this->db->_error_number() . ')');
        } 
        
        if (!$this->db->affected_rows()) {
            return false; 
        }
        
        return array('sucesso' => 'Dados restaurados com sucesso');
    }
    
    //get_by_id
    //criar o this update e o this insert
    
}