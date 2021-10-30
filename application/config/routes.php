<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'auth';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['kepala/surat_independen']                 = 'SuratIndependen';
$route['kepala/surat_independen/tambah']['get']   = 'SuratIndependen/create';
$route['kepala/surat_independen/tambah']['post']  = 'SuratIndependen/store';
$route['kepala/surat_independen/detail/(:any)']   = 'SuratIndependen/show/$1';