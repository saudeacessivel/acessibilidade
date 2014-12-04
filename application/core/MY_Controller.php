<?php

class Painel_Controller extends CI_Controller {

    private $js = array();
    private $css = array();
    public $url_retorno;
    
    public function __construct() {
        parent::__construct();
        
        define('PAINELPATH', $this->config->item('painel_folder'));
        $this->msmarty->assign('mensagem_retorno', $this->session->flashdata('mensagem_retorno'));
        $this->msmarty->assign('restaurar_id', $this->session->flashdata('restaurar_id'));
        $this->msmarty->assign('remover_id', $this->session->flashdata('remover_id'));
        
        if($this->input->server('QUERY_STRING')) {
            $this->url_retorno = urlencode('/' . uri_string() . '?' . $this->input->server('QUERY_STRING'));
        }
        
        if($this->input->get_post('url_retorno')) {
            $this->url_retorno = $this->input->get_post('url_retorno');
        }
        
        
    }

    public function set_pagina($pagina, $dados) {
        $dados['csrf_token_name'] = $this->security->get_csrf_token_name();
        $dados['csrf_hash'] = $this->security->get_csrf_hash();
        $dados['rota'] = $this->rota;

        $this->msmarty->assign('url_retorno', $this->url_retorno);
        
        $var_painel_id = $this->session->userdata('var_painel_id');

        /* config do painel */
        #$this->load->model('painel_m');
        #$db_configuracoes = $this->painel_m->get_configuracoes($var_painel_id);
        #$painel_configuracoes = unserialize($db_configuracoes->Painel_Configuracoes);
        #$dados['painel_config'] = $painel_configuracoes;
        /* fim config do painel */

        $dados['array_js'] = $this->get_js();
        $dados['array_css'] = $this->get_css();

        $this->msmarty->assign('site_nome', 'falta o nome');
        #$this->msmarty->assign('painel_id', $this->session->userdata('var_painel_id'));
        #montar o get_painel para recuperar os dados
        #$this->msmarty->assign('usuarioNome', $this->session->userdata('varUsuario_Nome'));
        #$this->msmarty->assign('usuarioAvatar',	$this->usuarios->getAvatar($usuarioId));

        #$print = $this->input->get('print') ? TRUE : FALSE;
        #$this->msmarty->assign('print', $print);

        if (is_array($dados)) {
            $this->msmarty->assign($dados);
        } else {
            $this->msmarty->assign('dados', $dados);
        }
        $ir = $this->msmarty->fetch(PAINELPATH . $pagina);
        $this->msmarty->assign('ir', $ir);
        $this->msmarty->display(PAINELPATH . 'index.tpl');
        exit();
    }

    public function set_js($js) {
        $this->js = $js;
    }

    public function get_js() {
        return $this->js;
    }

    public function set_css($css) {
        $this->css = $css;
    }

    public function get_css() {
        return $this->css;
    }

    public function set_url_retorno($url_retorno){
        $this->url_retorno = $url_retorno;
    }
}

class Site_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->msmarty->assign('malerta', $this->session->flashdata('malerta'));
    }

    public function set_pagina($pagina, $dados) {
        define('SITEPATH', 'site/');
        $this->msmarty->assign($dados);
        $ir = $this->msmarty->fetch(SITEPATH . $pagina);
        $this->msmarty->assign('ir', $ir);

        #$this->msmarty->loadFilter('output', 'group_css');
        #$this->msmarty->loadFilter('output', 'group_js');
        #$this->msmarty->loadFilter('output', 'minify');

        $this->msmarty->display(SITEPATH . 'index.tpl');
    }

    public function set_ajax($pagina, $dados) {
        define('SITEPATH', 'site/');
        $this->msmarty->assign($dados);
        $this->msmarty->display(SITEPATH . $pagina);
    }

}