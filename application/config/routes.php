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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin-login'] = 'admin/login/login';
$route['logout'] = 'admin/admin/exit';
$route['dashboard'] = 'admin/dashboard/dashboard';

/**********admin screen routes***********************/
$route['manage-product-category/add']['GET'] = 'admin/category/categorymgmt/index';
$route['manage-product-category/list']['GET']='admin/category/categorymgmt/list';
$route['manage-product-category/edit/(:any)']['GET']='admin/category/categorymgmt/edit/$1';

$route['manage-product/add']['GET'] = 'admin/product/productmgmt/index';
$route['manage-product/list']['GET']='admin/product/productmgmt/list';
$route['manage-product/edit/(:any)']['GET']='admin/product/productmgmt/edit/$1';

$route['manage-box/add']['GET'] = 'admin/box/boxmgmt/index';
$route['manage-box/list']['GET']='admin/box/boxmgmt/list';
$route['manage-box/edit/(:any)']['GET']='admin/box/boxmgmt/edit/$1';


$route['manage-hamper-category/add']['GET'] = 'admin/hamper/category/categorymgmt/index';
$route['manage-hamper-category/list']['GET']='admin/hamper/category/categorymgmt/list';
$route['manage-hamper-category/edit/(:any)']['GET']='admin/hamper/category/categorymgmt/edit/$1';



$route['manage-hamper/add']['GET'] = 'admin/hamper/hampermgmt/index';
$route['manage-hamper/list']['GET']='admin/hamper/hampermgmt/list';
$route['manage-hamper/edit/(:any)']['GET']='admin/hamper/hampermgmt/edit/$1';

/**********admin screen routes***********************/


/*******site routes*********/

$route['home']['GET'] = 'site/site/index';
$route['our-mithais']['GET'] = 'site/site/mithais';
$route['meethi-boxes']['GET'] = 'site/site/boxes';
$route['meethi-hampers']['GET'] = 'site/site/hampers';
$route['about-meethi']['GET'] = 'site/site/about';
$route['contact-meethi']['GET'] = 'site/site/contact';
$route['registration']['GET'] = 'site/site/register';
$route['reset-password']['GET'] = 'site/site/forgotpass';
$route['login']['GET'] = 'site/site/login';
$route['signout']['GET'] = 'site/site/logout';
$route['my-account']['GET'] = 'site/site/myaccount';
$route['my-account/edit-password']['GET'] = 'site/site/editmypassword';
$route['our-mithai/(:any)/details/(:any)']['GET'] = 'site/site/mithaidetails';
$route['our-mithai/(:any)/details/(:any)']['GET'] = 'site/site/mithaidetails';
$route['meethi-boxes/(:any)/details/(:any)']['GET'] = 'site/site/boxdetails';
$route['meethi-hampers/(:any)/details/(:any)']['GET'] = 'site/site/hamperdetails';
$route['my-cart'] = 'site/cart/mycart';
$route['terms-and-conditions']['GET'] = 'site/site/terms';

$route['reset-password/(:any)']['GET'] = 'site/site/resetpassword';

//$route['blog/joe'] = 'site/site/hamperdetails/2';




/*******site routes*********/




/**********API routes***********************/


$route['add-product-category']['POST']='api/categories/category/add';
$route['update-product-category']['POST']='api/categories/category/update';

$route['add-product']['POST']='api/products/product/add';
$route['update-product']['POST']='api/products/product/update';

$route['add-box']['POST']='api/boxes/box/add';
$route['update-box']['POST']='api/boxes/box/update';


$route['add-hamper-category']['POST']='api/hampers/hamper/add';
$route['update-hamper-category']['POST']='api/hampers/hamper/update';

$route['add-hamper']['POST']='api/hampers/hamper/addhamper';
$route['update-hamper']['POST']='api/hampers/hamper/updatehamper';


$route['add-users']['POST']='api/users/user/add';
$route['update-users']['POST']='api/users/user/update';
$route['update-password']['POST']='api/users/user/updatepassword';

$route['mail-check-send-mail']['POST']='api/users/user/mailchecksendmail';

$route['resetpassword']['POST']='api/users/user/resetpassword';


/**********API routes***********************/