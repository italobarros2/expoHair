<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


$route['default_controller']    = 'pages';
$route['gerenciamento/dashboard'] = 'admin';
$route['gerenciamento/comissoes'] = 'admin/comissoes';
$route['gerenciamento/cursos/(:num)'] = 'admin/cursos/$1';
$route['gerenciamento/workshops/(:num)'] = 'admin/cursos/$1';
$route['gerenciamento/concursos/(:num)'] = 'admin/cursos/$1';
$route['gerenciamento/compra/(:num)'] = 'admin/compra/$1';
$route['gerenciamento/login'] = 'admin/login';
$route['gerenciamento/errologin'] = 'admin/errologin';
$route['gerenciamento/autenticate'] = 'admin/autlogin';
$route['gerenciamento/resetpass'] = 'admin/resetpass';

$route['teste']    = 'pages/teste';
$route['pag']    = 'pagseguro/enviaEmail';
$route['trata_pagseguro']    = 'pagseguro/trata_pag';
$route['dados_pagseguro']    = 'pagseguro/dados_pag';
$route[	'pagamento/processo'] = 'pagseguro/recebidos';

$route['inscricao']              = 'pages/inscricao';
$route['submitcongress'] = 			'pages/submitCongress';

$route['ingressos']     		    = 'pages/ingresso';
$route['submitingressos']     		    = 'pagseguro/submitingressos';


$route['ingressos/usuario/(:any)']     		    = 'pages/confirmaLogin/$1';
$route['ingressos/usuario']     		    = 'pages/ingressosDisponiveis';

$route['planta'] 			    = 'pages/mapa';
$route['processaPlanta']            = 'pages/processaPlanta';

$route['vendor/inscricao/(:num)']    = 'pages/inscricaoVendor';
$route['workshops'] 				    = 'pages/workshop';
$route['work'] 				    = 'pages/work';

$route['noiva'] 			    = 'pages/noiva';
$route['barber'] 			    = 'pages/barbeiro';
$route['info'] 				    = 'pages/sobre';
$route['humor'] 			    = 'pages/humor';
//$route['inscricao'] 		    = 'pages/inscricao';
$route['show']       		    = 'pages/show';
$route['cursos']       		    = 'pages/cursos';
$route['comercial']      	    = 'pages/comercial';

$route['404_override']          = 'pages/erro404';
