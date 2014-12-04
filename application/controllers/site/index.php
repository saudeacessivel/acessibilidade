<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends Site_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('hospital_m', 'hospital');
    }

    public function index(){
        $dados = array();
        $this->set_pagina('principal.tpl', $dados);
    }

    public function contraste(){
        $dados = array('contraste' => '1');
        $this->set_pagina('principal.tpl', $dados);
    }

    public function acessibilidade(){
        $dados = array();
        $this->set_ajax('acessibilidade.tpl', $dados);
    }

    public function contrasteAcessibilidade(){
        $dados = array('contraste' => '1');
        $this->set_ajax('acessibilidade.tpl', $dados);
    }

    public function hospital(){
        $id = $this->uri->segment(2);
        $this->load->model('hospital_m', 'hospital');
        $this->hospital->set_where('cnes_id', $id);
        $hospital = $this->hospital->fetch_all();

        if($hospital){
            $dados = array('hospital'=> $hospital[0]);
            $this->set_ajax('hospital-detalhe.tpl', $dados);
        }else{
            redirect('/erro404');
        }
        
    } 

    public function hospitalContraste(){
        $id = $this->uri->segment(3);
        $this->load->model('hospital_m', 'hospital');
        $this->hospital->set_where('cnes_id', 2232235);
        $hospital = $this->hospital->fetch_all();
        
        if($hospital){
            $dados = array('contraste' => '1', 'hospital'=> $hospital[0]);
            $this->set_ajax('hospital-detalhe.tpl', $dados);
        }else{
            redirect('/erro404');
        }

       
    }  


    public function erro404(){
        $dados = array('contraste' => '0');
        $this->set_ajax('erro.tpl', $dados);
    }    

}
