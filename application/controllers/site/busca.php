<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Busca extends Site_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('hospital_m', 'hospital');
    }

    public function index(){

        @$dados['paginacao'] = $this->paginacao();

        $endereco = $this->uri->segment(1);
        $geoLocalizacao = $this->converteEnderecoEmGeolocalizacao($endereco);
        $dadosPG = $this->busca($geoLocalizacao, $dados, $endereco, NULL);

        if($geoLocalizacao['latitude'] == null){
            redirect('/erro404', 301);
        }

        $this->set_pagina('busca.tpl', @$dadosPG);
    }


    public function contraste(){

        @$dados['paginacao'] = $this->paginacaoContraste();

        $endereco = $this->uri->segment(2);
        $geoLocalizacao = $this->converteEnderecoEmGeolocalizacao($endereco);

        $dadosPG = $this->busca($geoLocalizacao, $dados, $endereco, 1);
        $this->set_pagina('busca.tpl', @$dadosPG);
    }


    public function buscaAlternativa(){
        @$dados['paginacao'] = $this->paginacao();

        $endereco = $this->limpaUrl($this->input->get('b'));
        $geoLocalizacao = $this->converteEnderecoEmGeolocalizacao($endereco);
        $dadosPG = $this->busca($geoLocalizacao, $dados, $endereco, NULL);
        $this->set_pagina('busca.tpl', @$dadosPG);
    }

    public function buscaAlternativaContraste(){
        @$dados['paginacao'] = $this->paginacaoContraste();
        $endereco =  $this->limpaUrl($this->input->get('b'));
        $geoLocalizacao = $this->converteEnderecoEmGeolocalizacao($endereco);
        $dadosPG = $this->busca($geoLocalizacao, $dados, $endereco, 1);
        $this->set_pagina('busca.tpl', @$dadosPG);
    }



    /*Buscas Rápidas*/
    public function filtroEquipamento(){

        $dados = $this->buscaComFiltro('nota_equipamento');
        if($this->uri->segment(1) == 'contraste'){
            $dados['contraste'] = 1;
        }
        $dados['endereco'] = 'equipamentos';
        $dados['titulo'] = 'Melhores em Equipamentos';
        $this->set_pagina('busca-rapida.tpl', $dados);
    }

    public function filtroMedicamento(){

        $dados = $this->buscaComFiltro('nota_medicamento');
        if($this->uri->segment(1) == 'contraste'){
            $dados['contraste'] = 1;
        }
        $dados['endereco'] = 'medicamentos';
        $dados['titulo'] = 'com mais medicamentos';
        $this->set_pagina('busca-rapida.tpl', $dados);
    }

    public function filtroDeficiente(){

        $dados = $this->buscaComFiltro('nota_def_idoso');
        if($this->uri->segment(1) == 'contraste'){
            $dados['contraste'] = 1;
        }
        $dados['endereco'] = 'deficientes';
        $dados['titulo'] = 'melhores para deficientes';
        $this->set_pagina('busca-rapida.tpl', $dados);
    }


    public function filtroIdoso(){

        $dados = $this->buscaComFiltro('nota_def_idoso');
        if($this->uri->segment(1) == 'contraste'){
            $dados['contraste'] = 1;
        }
        $dados['endereco'] = 'idosos';
        $dados['titulo'] = 'melhores para idosos';
        $this->set_pagina('busca-rapida.tpl', $dados);
    }



    private function buscaComFiltro($campo){
        if($this->session->userdata('latitude') != ''){
            $data['latitude'] = (double) $this->session->userdata('latitude');
            $data['longitude'] = (double) $this->session->userdata('longitude');
            $localizacao = 'Geolocalização';
        }else{
            $data = $this->geoLocationPhp();
            $localizacao = 'GeoIp';
        }

        $page['offset'] = 0; 
        $page['per_page'] = 5;
        $data['filtro'] = 'AND '.$campo.' = 5';

        $hospital = $this->hospital->buscarPorLocalizacao($data,$page);
        $dados = array('hospitais' => $hospital, 'latitude_mapa' => $data['latitude'], 'longitude_mapa' => $data['longitude'], 'dadoUsado' => $localizacao);

        return $dados;
    }

    /*Buscas e Functions Extras*/
    public function busca($geoLocalizacao, $dados, $endereco, $contraste){
        
        if($geoLocalizacao['latitude'] != ''){

            $data['offset'] = $dados['paginacao']['offset']; 
            $data['per_page'] = $dados['paginacao']['per_page'];
            $data['filtro'] = '';
            $hospital = $this->hospital->buscarPorLocalizacao($geoLocalizacao, $data);

            if($hospital != false){
                
                $dados['hospitais'] = $hospital;
                $dados['latitude_mapa'] = $geoLocalizacao['latitude'];
                $dados['longitude_mapa'] = $geoLocalizacao['longitude'];
                $dados['busca'] = ucwords(strtolower(str_replace('-', ' ',$endereco)));
                $dados['endereco'] = $endereco;
                $dados['contraste'] = $contraste;

            }else{
                 @$dados = '';
                $dados['contraste'] = $contraste;
            }

        }else{
            @$dados = '';
            $dados['contraste'] = $contraste;

        }

        return $dados;
    }

    public function procurarHospitaisProximos(){
        
    	$data['latitude'] = (double) $this->input->get('latitude');
    	$data['longitude'] = (double) $this->input->get('longitude');
        $page['offset'] = 0; 
        $page['per_page'] = 5;

        $this->session->set_userdata('latitude', $this->input->get('latitude'));
        $this->session->set_userdata('longitude', $this->input->get('longitude'));

        $hospital = $this->hospital->buscarPorLocalizacao($data,$page);
        $dados = array('hospitais' => $hospital, 'latitude_mapa' => $data['latitude'], 'longitude_mapa' => $data['longitude']);

        $this->set_ajax('hospitais.tpl', $dados);
    }

    public function geoLocationPhp(){
        $this->load->library('GeoLocation');

        $GeoLocation = new GeoLocation();
        $getLocation = $GeoLocation->getLocation();
        
        return array('latitude' => $getLocation->latitude, 'longitude' => $getLocation->longitude);
    }

    private function converteEnderecoEmGeolocalizacao($address){
        $cep = is_numeric($address);

        if($cep == true){
            $cepInicio = substr($address,0,5);
            $cepFinal = substr($address,5,7);
            $address = $cepInicio.'-'.$cepFinal;
        };


        $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'-brasil&sensor=false');
        $output= json_decode($geocode);

        @$lat = $output->results[0]->geometry->location->lat;
        @$long = $output->results[0]->geometry->location->lng;

        return array('latitude'=> $lat, 'longitude'=> $long);
    }

    private function paginacao(){
        /* paginacao */
        $this->load->library('pagination');  

        $per_page = 5;
        $uri_segment = 2;
        $base_url_complemento = '';

        $dados['total_rows'] = 50;

        $page = ($this->uri->segment($uri_segment)) ? $this->uri->segment($uri_segment) : 1;
        $offset = ($per_page*$page)-$per_page;

        
        
        $config["base_url"] = '/'.$this->uri->segment(1).$base_url_complemento;
        $config["per_page"] = $per_page;
        $config["uri_segment"] = $uri_segment;
        $config["total_rows"] = $dados['total_rows'];
        $this->pagination->initialize($config);
        
        $paginando['links'] = $this->pagination->create_links_painel();
        $paginando['total'] = $this->pagination->create_links_total();
        $paginando["per_page"] = $per_page;
        $paginando["offset"] = $offset;
        /* fim paginacao */

        return $paginando;
    }

    private function paginacaoContraste(){
        /* paginacao */
        $this->load->library('pagination');  

        $per_page = 5;
        $uri_segment = 3;
        $base_url_complemento = '';

        $dados['total_rows'] = 50;

        $page = ($this->uri->segment($uri_segment)) ? $this->uri->segment($uri_segment) : 1;
        $offset = ($per_page*$page)-$per_page;

        
        
        $config["base_url"] = '/contraste/'.$this->uri->segment(2).$base_url_complemento;
        $config["per_page"] = $per_page;
        $config["uri_segment"] = $uri_segment;
        $config["total_rows"] = $dados['total_rows'];
        $this->pagination->initialize($config);
        
        $paginando['links'] = $this->pagination->create_links_painel();
        $paginando['total'] = $this->pagination->create_links_total();
        $paginando["per_page"] = $per_page;
        $paginando["offset"] = $offset;
        /* fim paginacao */

        return $paginando;
    }

    
    public function limpaUrl($str){

        $str = strtolower(utf8_decode($str)); $i=1;
        $str = strtr($str, utf8_decode('àáâãäåæçèéêëìíîïñòóôõöøùúûýýÿ'), 'aaaaaaaceeeeiiiinoooooouuuyyy');
        $str = preg_replace("/([^a-z0-9])/",'-',utf8_encode($str));
        while($i>0) $str = str_replace('--','-',$str,$i);
        if (substr($str, -1) == '-') $str = substr($str, 0, -1);
        return $str;
    }
     

}
