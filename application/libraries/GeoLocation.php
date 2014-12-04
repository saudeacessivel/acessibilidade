<?php

/**
 * Classe que busca localizacao do usuario utilizando webservice
 * da geoplugin.net 
 * @exemple $geo = new GeoLocation('127.0.0.1'); $geo->getLocation(); * 
 * @param   IP do servidor
 * @return  Object
 * @author  Tayron Miranda 
 * @since   19/01/2013 18:03
 */	

class geolocation{
	
	private $_ip;
	private $_webService;
		
	/**
	 * Metodo construtor da classe 
	 */	
	function __construct( $ip = null )
	{
		// Setando ip passado por parametro, caso nao passe, pega ip do servidor 
		$this->_ip = ( $ip != null ) ? $ip : $_SERVER['REMOTE_ADDR'];
		
		// Configurando webservice a ser utilizado pela classe
		$this->_webService = "http://www.geoplugin.net/php.gp?{$this->_ip}";
	}

	/**
	 * Metodo que consome webservice, monta um objeto padrao com os 
	 * dados vindo do webservice e retorna
	 * @return Object
	 */
	public function getLocation()
	{
		$array = unserialize( file_get_contents( $this->_webService ) );

		// Motando um objedo padrao e retornando para ser acessado
		$geolocation 				= new stdClass();

		$geolocation->city   		= $array['geoplugin_city'];
		$geolocation->region 		= $array['geoplugin_region'];
		$geolocation->country     	= $array['geoplugin_countryName'];
		$geolocation->countrycode 	= $array['geoplugin_countryCode'];
		$geolocation->longitude   	= $array['geoplugin_longitude'];
		$geolocation->latitude  	= $array['geoplugin_latitude'];		

		return $geolocation;
	}
	public function __toString(){
		$geo = $this->getLocation();
		return array('latitude' => $geo->longitude, 'longitude' => $geo->latitude);
	}
}
