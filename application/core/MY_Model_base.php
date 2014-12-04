<?php

if (!defined('BASEPATH')){
    exit('No direct script access allowed');
}

class MY_Model_base extends CI_Model {

    protected $tabela;
    
    /**
     * Constructor
     *
     * @access public
     */
    function __construct($tabela = null) {
        log_message('debug', "Model Base Class Initialized");
        $this->tabela = $tabela;
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

    public function set_where($campo, $valor = null) {
        if (is_array($campo)) {
            $this->db->where($campo);
        } else {
            $this->db->where($campo, $valor);
        }
    }

    public function set_where_in($campo, $valor = array()) {
        $this->db->where_in($campo, $valor);
    }

    public function set_where_not_in($campo, $valor = array()) {
        $this->db->where_not_in($campo, $valor);
    }

    public function set_like($campo, $valor, $porcento = 'both') {
        $this->db->like($campo, $valor, $porcento);
    }

    public function set_order($campo) {
        $this->db->order_by($campo);
    }
    
    public function set_group_by($campo) {
        $this->db->group_by($campo);
    }
    
    public function set_limit($limite, $comeco = 0) {
        return $this->db->limit($limite, $comeco);
    }

    public function set_inner_join($tabela, $condicao, $campos = array()) {
        return $this->set_join($tabela, $condicao, $campos, 'inner');
    }
    
    public function set_left_join($tabela, $condicao, $campos = array()) {
        return $this->set_join($tabela, $condicao, $campos, 'left');
    }
    
    public function set_join($tabela, $condicao, $campos = array(), $tipo = 'inner'){
        $a_campos = array();
        foreach ($campos as $v){
            $a_campos[] = $tabela . '.' . $v . ' AS ' . $tabela . '_' . $v;
        }
        
        if(count($a_campos) > 0){
            $this->db->select(implode(', ', $a_campos));
        }
        
        return $this->db->join($tabela, $condicao, $tipo);
    }
    
    public function set_select($campos){
        return $this->db->select($campos);
    }
    
    public function set_set($campos){
        return $this->db->set($campos);
    }

    public function count_all_results() {
        return $this->db->count_all_results($this->tabela);
    }

    public function fetch_all() {
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
    
    public function get_by_id($id){
        $this->db->select($this->tabela . '.*');
        $this->db->where($this->tabela . '.id', $id);
        $query = $this->db->get($this->tabela);
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return false;
    }
    
    public function get_to_select($campos = array('id', 'nome')){
        $this->db->select($this->tabela . '.*');
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
        if($campo && $valor){
            $this->set_where($campo, $valor);
            return $this->get_to_select($campos);
        }
        return array('' => '-');
    }
    
    public function inserir($data){
        if ($this->db->insert($this->tabela, $data)) {
            return array('insert_id' => $this->db->insert_id());
        } 
        return array('erro' => $this->db->_error_message() . ' (' . $this->db->_error_number() . ')');
    }
    
    public function alterar($data){
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
        $this->db->where($this->tabela . '.id', $id);
        $db_result = $this->db->delete($this->tabela);
        
        if (!$db_result) {
            return array('erro' => $this->db->_error_message() . ' (' . $this->db->_error_number() . ')');
        } 
        
        if (!$this->db->affected_rows()) {
            return false; /* deu certo mas não atualizou nada */
        } 
        return array('sucesso' => 'Dados removidos com sucesso');
    }
    
}