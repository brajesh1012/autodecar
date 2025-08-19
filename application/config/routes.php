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
|	https://codeigniter.com/userguide3/general/routing.html
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
// $route['default_controller'] = 'welcome';
$route['default_controller'] = 'WebsiteController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['register'] = 'WebsiteController/register';
$route['login'] = 'WebsiteController/login';
$route['seller'] = 'WebsiteController';
$route['admin'] = 'WebsiteController';
$route['dealer'] = 'WebsiteController';
$route['logout'] = 'WebsiteController/logout';
$route['forgot-password'] = 'WebsiteController/forgot_password';
$route['reset-password/(:any)'] = 'WebsiteController/reset_password/$1';
$route['listing-list'] = 'WebsiteController/listing_list';
$route['filterVehicles'] = 'WebsiteController/filterVehicles';


$route['listing-grid'] = 'WebsiteController/listing_grid';
$route['listing-grid2'] = 'WebsiteController/listing_grid2';
$route['listing-grid-map'] = 'WebsiteController/listing_grid_map';
$route['listing-details'] = 'WebsiteController/listing_details';
$route['blog-grid'] = 'WebsiteController/blog_grid';
// $route['blog-details'] = 'WebsiteController/blog_details';
$route['blog-details/(:any)'] = 'WebsiteController/blog_details/$1';
$route['listing-details-v3'] = 'WebsiteController/listing_details_v3';
$route['listing-details-v4'] = 'WebsiteController/listing_details_v4';
$route['about-us'] = 'WebsiteController/about_us';
$route['faq'] = 'WebsiteController/faq';
$route['pricing'] = 'WebsiteController/pricing';
$route['dealer-list'] = 'WebsiteController/dealer_list';
// $route['list-details-v1'] = 'WebsiteController/list_details_v1'; //remove list-details-v1
$route['list-details/(:any)'] = 'WebsiteController/list_details_v1/$1';
$route['dealer-details'] = 'WebsiteController/dealer_details';
$route['sale-agent'] = 'WebsiteController/sale_agent';
$route['sale-agent-details'] = 'WebsiteController/sale_agent_details';
$route['set-location'] = 'WebsiteController/set_location';
$route['save-language'] = 'WebsiteController/save_language';


$route['toggle'] = 'WebsiteController/toggle';
$route['favorite-list'] = 'WebsiteController/favorite_list';

$route['reviews'] = 'WebsiteController/reviews';
$route['delete-review-ajax'] = 'WebsiteController/delete_review_ajax';

$route['compare'] = 'WebsiteController/compare';
$route['contact'] = 'WebsiteController/contact';
$route['enquiry'] = 'WebsiteController/enquiry';
$route['profile'] = 'WebsiteController/profile';
$route['update-profile'] = 'WebsiteController/update_profile';
$route['get-vehicle-count'] = 'WebsiteController/get_vehicle_count';






$route[trim('dashboard', '/')] = 'AdminController/index';
$route[trim(ADMIN_PATH  . '/my-listing', '/')] = 'AdminController/my_listing';
$route[trim(ADMIN_PATH  . '/my-favorite', '/')] = 'AdminController/my_favorite';
$route[trim(ADMIN_PATH  . '/message', '/')] = 'AdminController/message';
$route[trim(ADMIN_PATH  . '/my-review', '/')] = 'AdminController/my_review';
$route[trim(ADMIN_PATH  . '/my-profile', '/')] = 'AdminController/my_profile';
$route[trim(ADMIN_PATH  . '/dealer-profile', '/')] = 'AdminController/dealer_my_profile';
$route[trim(ADMIN_PATH  . '/change-password', '/')] = 'AdminController/change_password';
$route[trim(ADMIN_PATH  . '/add-listing', '/')] = 'AdminController/add_listing';
$route[trim(ADMIN_PATH  . '/add-new-listing', '/')] = 'AdminController/add_listing';
$route[trim(ADMIN_PATH  . '/edit-listing/(:any)', '/')] = 'AdminController/edit_listing/$1';
$route[trim(ADMIN_PATH  . '/duplicate-listing/(:any)', '/')] = 'AdminController/duplicate_listing/$1';
$route[trim(ADMIN_PATH  . '/delete-car-img', '/')] = 'AdminController/delete_car_img';
$route[trim(ADMIN_PATH  . '/add-vehicle', '/')] = 'AdminController/add_vehicle';

// $route[trim(ADMIN_PATH  . '/delete-vehicle-record')] = 'AdminController/delete_vehicle_record';

$route[trim(ADMIN_PATH  . '/vehicle-model', '/')] = 'AdminController/vehicle_model';
$route[trim(ADMIN_PATH  . '/add-model', '/')] = 'AdminController/add_model';
$route[trim(ADMIN_PATH  . '/delete-model', '/')] = 'AdminController/delete_model';

$route[trim(ADMIN_PATH  . '/add-variant', '/')] = 'AdminController/add_variant';
$route[trim(ADMIN_PATH  . '/delete-variant', '/')] = 'AdminController/delete_variant';

$route[trim(ADMIN_PATH  . '/add-categories', '/')] = 'AdminController/add_categories';
$route[trim(ADMIN_PATH  . '/vehicle-make', '/')] = 'AdminController/vehicle_make';
$route[trim(ADMIN_PATH  . '/add-make', '/')] = 'AdminController/add_make';
$route[trim(ADMIN_PATH  . '/get-category-by-vehicle-type', '/')] = 'AdminController/get_category_by_vehicle_type';
$route[trim(ADMIN_PATH  . '/get-makes-by-category', '/')] = 'AdminController/get_makes_by_category';
$route[trim(ADMIN_PATH  . '/get-modal-by-make', '/')] = 'AdminController/get_modal_by_make';
$route[trim(ADMIN_PATH  . '/get-variant-by-model', '/')] = 'AdminController/get_variant_by_model';
$route[trim(ADMIN_PATH  . '/get-city-by-state', '/')] = 'AdminController/get_city_by_state';
$route[trim(ADMIN_PATH  . '/delete-make', '/')] = 'AdminController/delete_make';

$route[trim(ADMIN_PATH  . '/vehicle-transmission', '/')] = 'AdminController/vehicle_transmission';
$route[trim(ADMIN_PATH  . '/add-transmission', '/')] = 'AdminController/add_transmission';
$route[trim(ADMIN_PATH  . '/delete-transmission', '/')] = 'AdminController/delete_transmission';

$route[trim(ADMIN_PATH  . '/vehicle-fuel-type', '/')] = 'AdminController/vehicle_fuel_type';
$route[trim(ADMIN_PATH  . '/add-fuel-type', '/')] = 'AdminController/add_fuel_type';
$route[trim(ADMIN_PATH  . '/delete-fuel-type', '/')] = 'AdminController/delete_fuel_type';

$route[trim(ADMIN_PATH  . '/permission', '/')] = 'AdminController/permission';
$route[trim(ADMIN_PATH  . '/add-permission', '/')] = 'AdminController/add_permission';
$route[trim(ADMIN_PATH  . '/delete-permission', '/')] = 'AdminController/delete_permission';

$route[trim(ADMIN_PATH  . '/roles', '/')] = 'AdminController/role';
$route[trim(ADMIN_PATH  . '/add-roles', '/')] = 'AdminController/add_role';
$route[trim(ADMIN_PATH  . '/edit-roles', '/')] = 'AdminController/edit_role';
$route[trim(ADMIN_PATH  . '/update-roles', '/')] = 'AdminController/update_role';

$route[trim(ADMIN_PATH  . '/bulk-upload-view', '/')] = 'AdminController/bulk_upload_view';
$route[trim(ADMIN_PATH  . '/import-csv', '/')] = 'AdminController/import_csv';
$route[trim(ADMIN_PATH  . '/download-csv', '/')] = 'AdminController/download_csv';


$route[trim(ADMIN_PATH  . '/users', '/')] = 'AdminController/users_list';
$route[trim(ADMIN_PATH  . '/edit-users', '/')] = 'AdminController/edit_users';

$route[trim(ADMIN_PATH  . '/subscribed-users', '/')] = 'AdminController/subscribed_users';

$route[trim(ADMIN_PATH  . '/add-plan', '/')] = 'AdminController/add_plan';
$route[trim(ADMIN_PATH  . '/update-plan/(:any)', '/')] = 'AdminController/update_plan/$1';

$route[trim(ADMIN_PATH  . '/buy-plan/(:num)', '/')] = 'AdminController/buy_plan/$1';
$route[trim(ADMIN_PATH  . '/payment-success/(:num)', '/')] = 'AdminController/payment_success/$1';

// $route[trim(ADMIN_PATH . '/view-chat', '/')] = 'AdminController/view_chat';
$route[trim(ADMIN_PATH  . '/view-chat/(:num)/(:num)', '/')] = 'AdminController/view_chat/$1/$2';

$route[trim(ADMIN_PATH  . '/chat-overview', '/')] = 'AdminController/chat_overview';

$route[trim(ADMIN_PATH  . '/get-user-info', '/')] = 'AdminController/get_user_info';

$route['messages'] = 'WebsiteController/chat_list';
// $route['buyer/view-chat/(:num)/(:num)'] = 'chat/view_chat/$1/$2';
// $route['get-user-info'] = 'chat/get_user_info';
$route[trim(ADMIN_PATH  . '/test', '/')] = 'AdminController/test';
$route[trim(ADMIN_PATH  . '/about', '/')] = 'AdminController/about';
$route[trim(ADMIN_PATH  . '/blogs', '/')] = 'AdminController/blogs';
$route[trim(ADMIN_PATH  . '/add-blog', '/')] = 'AdminController/add_blog';
$route[trim(ADMIN_PATH  . '/edit-blog', '/')] = 'AdminController/edit_blog';
$route[trim(ADMIN_PATH  . '/delete-blog', '/')] = 'AdminController/delete_blog';
$route[trim(ADMIN_PATH  . '/enquiry-list', '/')] = 'AdminController/enquiry_list';
$route[trim(ADMIN_PATH  . '/contact-us', '/')] = 'AdminController/contact_us';
$route[trim(ADMIN_PATH  . '/features', '/')] = 'AdminController/features';
$route[trim(ADMIN_PATH  . '/delete-features', '/')] = 'AdminController/delete_features';

// ////////////////////////////////////////////Dealer//////////////////////////////////////////////////////
$route['advance-filter'] = 'WebsiteController/advance_filter';
$route['car'] = 'WebsiteController/car';
$route['bike'] = 'WebsiteController/bike';
$route['commercial'] = 'WebsiteController/commercial';

$route['dealer/my-listing'] = 'dealer/my_listing';
$route['dealer/delete-vehicle-record'] = 'dealer/delete_vehicle_record';
// $route['dealer/my-favorite'] = 'dealer/my_favorite';
$route['dealer/message'] = 'dealer/message';
// $route['dealer/my-review'] = 'dealer/my_review';
$route['dealer/my-profile'] = 'dealer/my_profile';
$route['dealer/change-password'] = 'dealer/change_password'; // Changed to CommanController for password change
$route['dealer/add-listing'] = 'dealer/add_listing';
$route['dealer/edit-listing/(:any)'] = 'dealer/edit_listing/$1';
$route['dealer/delete-car-img'] = 'dealer/delete_car_img';
$route['dealer/add-vehicle'] = 'dealer/add_vehicle';
$route['dealer/vehicle-model'] = 'dealer/vehicle_model';
$route['dealer/add-model'] = 'dealer/add_model';
$route['dealer/delete-model'] = 'dealer/delete_model';

$route['dealer/vehicle-make'] = 'dealer/vehicle_make';
$route['dealer/add-make'] = 'dealer/add_make';
$route['dealer/delete-make'] = 'dealer/delete_make';

$route['dealer/vehicle-transmission'] = 'dealer/vehicle_transmission';
$route['dealer/add-transmission'] = 'dealer/add_transmission';
$route['dealer/delete-transmission'] = 'dealer/delete_transmission';

$route['dealer/vehicle-fuel-type'] = 'dealer/vehicle_fuel_type';
$route['dealer/add-fuel-type'] = 'dealer/add_fuel_type';
$route['dealer/delete-fuel-type'] = 'dealer/delete_fuel_type';


$route['dealer/bulk-upload-view'] = 'dealer/bulk_upload_view';
$route['dealer/import-csv'] = 'dealer/import_csv';
$route['dealer/download-csv'] = 'dealer/download_csv';


// ///////////////////////////Seller Route///////////////////////////////////////////////////

$route['seller/my-listing'] = 'seller/my_listing';
$route['seller/add-listing'] = 'seller/add_listing';
$route['seller/edit-listing/(:any)'] = 'seller/edit_listing/$1';
$route['seller/delete-vehicle-record'] = 'seller/delete_vehicle_record';



$route['seller/vehicle-model'] = 'seller/vehicle_model';
$route['seller/add-model'] = 'seller/add_model';
$route['seller/delete-model'] = 'seller/delete_model';

$route['seller/vehicle-make'] = 'seller/vehicle_make';
$route['seller/add-make'] = 'seller/add_make';
$route['seller/delete-make'] = 'seller/delete_make';

$route['seller/vehicle-transmission'] = 'seller/vehicle_transmission';
$route['seller/add-transmission'] = 'seller/add_transmission';
$route['seller/delete-transmission'] = 'seller/delete_transmission';

$route['seller/vehicle-fuel-type'] = 'seller/vehicle_fuel_type';
$route['seller/add-fuel-type'] = 'seller/add_fuel_type';
$route['seller/delete-fuel-type'] = 'seller/delete_fuel_type';





$route['seller/my-profile'] = 'seller/my_profile';
$route['seller/change-password'] = 'seller/change_password';

// /////////////////////////Comman Route/////////////////////////////

$route['dealer/delete-record'] = 'CommanController/delete_record';
$route['dealer/update-status'] = 'CommanController/update_status';