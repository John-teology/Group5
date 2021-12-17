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
$route['default_controller'] = 'tracker';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// routes for mainpage buttons
$route['tracker'] = "tracker/mainpage";
$route['tracker/user_profile'] = "tracker/user_proc";

// routes for login/register authetication
$route['tracker/login'] = "tracker/login";
$route['tracker/log_auth'] = "tracker/login_logic";
$route['tracker/register'] = "tracker/register";
$route['tracker/reg_auth'] = "tracker/register_method";

// routes for Contact tracing form
$route['tracker/contact_tracing_form'] = "tracker/CT_form";
$route['tracker/contact_tracing_auth'] = "tracker/CT_form_logic";
$route['tracker/contact_tracing'] = "tracker/CT_display";
$route['tracker/contact_tracing_update/(:any)'] = "tracker/CT_update/$1";
$route['tracker/contact_tracing_update_auth/(:any)'] = "tracker/CT_update_logic/$1";


// routes for creating establishment
$route['tracker/createEstablishment'] = "tracker/createEstablishment";


// route for establishment

$route['tracker/user_prof_este'] = "tracker/user_este";

$route['tracker/Establishment_Create'] = "tracker/Create";
$route['tracker/Establishment_auth'] = "tracker/display_Es";
$route['tracker/Establishment_specific/(:num)'] = "tracker/Esta_show/$1";









