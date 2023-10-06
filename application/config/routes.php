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
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//KREDIT KMK
$route['kredit/KMK'] = 'Kredit_KMK/index';
$route['kredit/KMK/add'] = 'Kredit_KMK/tambah';
$route['kredit/KMK/edit'] = 'Kredit_KMK/edit';

// KREDIT KAB
$route['kredit/KAB'] = 'Kredit_KAB/index';
$route['kredit/KAB/add'] = 'Kredit_KAB/tambah';
$route['kredit/KAB/edit'] = 'Kredit_KAB/edit';

// KREDIT PEGAWAI
$route['kredit/kredit_pegawai'] = 'Kredit_pegawai/index';
$route['kredit/kredit_pegawai/add'] = 'Kredit_pegawai/tambah';
$route['kredit/kredit_pegawai/edit'] = 'Kredit_pegawai/edit';

// DEPOSITO
$route['deposito'] = 'Deposito/index';
$route['deposito/add'] = 'Deposito/tambah';
$route['deposito/edit'] = 'Deposito/edit';

// TABUNGAN TAMADES
$route['tabungan'] = 'Tabungan/index';
$route['tabungan/add'] = 'Tabungan/tambah';
$route['tabungan/edit'] = 'Tabungan/edit';