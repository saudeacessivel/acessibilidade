<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "site/index";
$route['cron'] = "site/cron/index";
$route['acessibilidade'] = "site/index/acessibilidade";

$route['posto-saude/(:any)'] = "site/index/hospital";
$route['contraste/posto-saude/(:any)'] = "site/index/hospitalContraste";

$route['contraste/acessibilidade'] = "site/index/contrasteAcessibilidade";
$route['contraste'] = "site/index/contraste";

$route['contrasteb/(:any)'] = "site/busca/buscaAlternativaContraste";
$route['contrasteb'] = "site/busca/buscaAlternativaContraste";

$route['contraste/(:any)'] = "site/busca/contraste";
$route['busca/(:any)'] = "site/busca/$1";
$route['b'] = "site/busca/buscaAlternativa";
$route['b/(:any)'] = "site/busca/buscaAlternativa";

$route['deficientes'] = "site/busca/filtroDeficiente";
$route['idosos'] = "site/busca/filtroIdoso";
$route['medicamentos'] = "site/busca/filtroMedicamento";
$route['equipamentos'] = "site/busca/filtroEquipamento";
$route['erro404'] = "site/index/erro404";


//$route['estrutura'] = "site/busca/filtroEstrutura";


$route['contraste/deficientes'] = "site/busca/filtroDeficiente";
$route['contraste/idosos'] = "site/busca/filtroIdoso";
$route['contraste/medicamentos'] = "site/busca/filtroMedicamento";
$route['contraste/equipamentos'] = "site/busca/filtroEquipamento";



$route['(:any)'] = "site/busca/index";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */