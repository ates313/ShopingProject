<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// User route=

$route['u_home'] = 'UserController/home';
$route['u_about'] = 'UserController/about';
$route['u_account'] = 'UserController/account';
$route['u_blog'] = 'UserController/blog';
$route['u_cart'] = 'UserController/cart';
$route['u_checkout'] = 'UserController/checkout';
$route['u_contact'] = 'UserController/contact';
$route['u_faq'] = 'UserController/faq';
$route['u_wishlist'] = 'UserController/wishlist';
$route['u_cartEmpty'] = 'UserController/cartEmpty';
$route['u_customDealPage'] = 'UserController/customDealPage';
$route['u_lostPassword'] = 'UserController/lostPassword';
$route['u_shopv1RootCategory'] = 'UserController/shopv1RootCategory';
$route['u_shopv1RootCategoryCopy'] = 'UserController/shopv1RootCategoryCopy';
$route['u_shopv2SubCategory'] = 'UserController/shopv2SubCategory';
$route['u_shopv3SubSubCategory'] = 'UserController/shopv3SubSubCategory';
$route['u_shopv4FilterAsCategory'] = 'UserController/shopv4FilterAsCategory';
$route['u_shopv5ProductNotFound'] = 'UserController/shopv5ProductNotFound';
$route['u_shopv6SearchResults'] = 'UserController/shopv6SearchResults';
$route['u_singleProduct'] = 'UserController/singleProduct';
$route['u_storeDirectory'] = 'UserController/storeDirectory';
$route['u_termsAndConditions'] = 'UserController/termsAndConditions';
$route['u_trackOrder'] = 'UserController/trackOrder';
$route['u_wishlistEmpty'] = 'UserController/wishlistEmpty';
$route['u_blogDetail'] = 'UserController/blogDetail';









// Admin Route











?>












