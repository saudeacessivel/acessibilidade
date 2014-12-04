<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Cron extends Site_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
        ini_set('memory_limit', '-1');
        
		$this->load->model('hospital_m', 'hospital');
        $dadosAbertos = $this->pegarDadosCSV();
        $numero = 0;
        foreach($dadosAbertos as $dado){
        	if($numero != 0){

        		$cadastrado = $this->hospital->getCnesId($dado);

	            if($cadastrado == null || $cadastrado == ''){
	            	$this->hospital->inserir($dado);
	            }else{
	            	$dado['id'] = $cadastrado[0]->id;
	            	$this->hospital->alterar($dado);
	            }
        	}
            
            $numero++;
        }
	}

	public function pegarDadosCSV(){
		$row = 1;
		$handle = fopen ("http://repositorio.dados.gov.br/saude/unidades-saude/unidade-basica-saude/ubs.csv","r");
		
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);

			for ($c=0; $c < $num; $c++) {
				$dado[$row][$this->nameVariable($c)] = $data[$c];
			}

			$dado[$row]['palavra_chave'] = $dado[$row]['nome'].' '.$dado[$row]['endereco'].' '.$dado[$row]['bairro'].' '.$dado[$row]['cidade'];
			$dado[$row]['nota_estrutura'] = $this->nota($dado[$row]['situacao_fisica']);
			$dado[$row]['nota_medicamento'] = $this->nota($dado[$row]['situacao_medicamentos']);
			$dado[$row]['nota_def_idoso'] = $this->nota($dado[$row]['situacao_deficiente_fisico_idoso']);
			$dado[$row]['nota_equipamento'] = $this->nota($dado[$row]['situacao_equipamentos']);

			$row++;
		}
		fclose ($handle);

		return $dado;
	}

	private function nota($valor){
		switch($valor){

			case 'Desempenho acima da média':
			return 3;
			break;

			case 'Desempenho muito acima da média':
			return 5;
			break;

			default:
			return 1;
			break;
		}
	}

	private function nameVariable($numero){
		switch ($numero) {

			case 0:
			return 'latitude';
			break;

			case 1:
			return 'longitude';
			break;

			case 2:
			return 'municipio_id';
			break;

			case 3:
			return 'cnes_id';
			break;

			case 4:
			return 'nome';
			break;

			case 5:
			return 'endereco';
			break;

			case 6:
			return 'bairro';
			break;

			case 7:
			return 'cidade';
			break;

			case 8:
			return 'telefone';
			break;

			case 9:
			return 'situacao_fisica';
			break;

			case 10:
			return 'situacao_deficiente_fisico_idoso';
			break;

			case 11:
			return 'situacao_equipamentos';
			break;

			case 12:
			return 'situacao_medicamentos';
			break;
		}
	}
}
