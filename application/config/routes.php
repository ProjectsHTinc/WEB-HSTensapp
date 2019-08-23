<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'home/index';
$route['about'] = 'home/about';
$route['contact'] = 'home/contact';
$route['register'] = 'home/register';
$route['login'] = 'home/login';
$route['dashboard'] = 'home/dashboard';
$route['logout'] = 'home/logout';

$route['user_profile'] = 'user/user_profile';
$route['change_password'] = 'user/change_password';
$route['renew_plans'] = 'user/renew_plans';
$route['order_history'] = 'user/order_history';
$route['plan_history'] = 'user/plan_history';

