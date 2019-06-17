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
$route['logout'] = 'home/logout';
// $route['project_details/(:num)'] = 'welcome/project_details/$1';
$route['about'] = 'home/about';
$route['home'] = 'home/index';

$route['user_profile'] = 'user/user_profile';
$route['order_history'] = 'user/order_history';
$route['plan_history'] = 'user/plan_history';
//--------PIA MODULE ENDS-------//
