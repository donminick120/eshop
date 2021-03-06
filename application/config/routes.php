<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['sms/(:any)'] = 'main/getsms/$1';	
$route['sale'] = 'main/sale';
$route['search/(:any)'] = 'main/search_product/$1';
$route['order'] = 'main/allorder';
$route['categories'] = 'main/allcategory';
$route['addcategory'] = 'main/addcategory';
$route['view_category/(:any)'] = 'main/viewcategory/$1';
$route['receipt'] = 'main/receipt';
$route['pay'] = 'main/pay';
$route['cart'] = 'main/cart';
$route['update'] ='main/update';
$route['logout'] = 'main/costumer_logout';
$route['admin_logout']='main/admin_logout';
$route['edit/(:any)'] = 'main/edit/$1';
$route['product'] = 'main/products';
$route['login'] = 'main/login';
$route['products/(:any)'] = 'main/getproduct/$1';
$route['index']='main/view';
$route['createpostv1'] = 'main/createpostv1';
$route['createpost']='main/createpost';
$route['default_controller'] = 'main/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
