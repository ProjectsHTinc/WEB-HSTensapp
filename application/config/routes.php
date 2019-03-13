<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



//--------PIA MODULE Starts-------//
$route['dashboard'] = 'home/dashboard';
$route['contact'] = 'home/contact';
$route['register'] = 'home/register';
$route['login'] = 'home/login';
// $route['project_details/(:num)'] = 'welcome/project_details/$1';
$route['about'] = 'home/about';
$route['home'] = 'home/index';
//--------PIA MODULE ENDS-------//
