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
$route['default_controller'] = 'Homepage';
$route['404_override'] = 'My_404';
$route['translate_uri_dashes'] = TRUE;
$route['yonetim-paneli'] = 'admin/Admin/homepage_admin';
$route['yonetim-paneli-giris'] = 'admin/Admin';
$route['yonetim-paneli/cikis'] = 'admin/Admin/logout';
$route['yonetim-paneli/profil-duzenle'] = 'admin/Admin/edit_profile';
$route['yonetim-paneli/hakkimizda'] = 'admin/Admin/about';
$route['yonetim-paneli/iletisim'] = 'admin/Admin/contact';
$route['yonetim-paneli/mesajlar'] = 'admin/Admin/messages';
$route['yonetim-paneli/banner-duzenle/(:any)'] = 'admin/Admin/banner_update/$1';
$route['yonetim-paneli/aydinlatma-metni'] = 'admin/Admin/contract';

$route['yonetim-paneli/site-ayarlari/(:any)'] = 'admin/Admin/site_settings/$1';

$route['yonetim-paneli/ozellikler'] = 'admin/Admin/features';

$route['yonetim-paneli/aydinlatma-metni'] = 'admin/Admin/lighting_text';

$route['yonetim-paneli/ikonlar'] = 'admin/Admin/about_icons';
$route['yonetim-paneli/ikon-duzenle/(:any)'] = 'admin/Admin/icon_update/$1';

$route['yonetim-paneli/etiketler'] = 'admin/Admin/tickets';
$route['yonetim-paneli/etiket-duzenle/(:any)'] = 'admin/Admin/ticket_update/$1';


$route['yonetim-paneli/slider-ekle'] = 'admin/Admin/add_slider';
$route['yonetim-paneli/slider-listele'] = 'admin/Admin/list_slider';
$route['yonetim-paneli/slider-duzenle/(:any)'] = 'admin/Admin/update_slider/$1';

$route['yonetim-paneli/galeri-listele'] = 'admin/Admin/list_gallery';
$route['yonetim-paneli/galeri-ekle'] = 'admin/Admin/add_gallery';
$route['yonetim-paneli/galeri-duzenle/(:any)'] = 'admin/Admin/update_gallery/$1';

$route['yonetim-paneli/sertifika-ekle'] = 'admin/Admin/add_certificate';
$route['yonetim-paneli/sertifika-listele'] = 'admin/Admin/list_certificate';
$route['yonetim-paneli/sertifika-duzenle/(:any)'] = 'admin/Admin/update_certificate/$1';

$route['yonetim-paneli/urun-ekle'] = 'admin/Admin/add_product';
$route['yonetim-paneli/urun-listele'] = 'admin/Admin/list_product';
$route['yonetim-paneli/urunu-duzenle/(:any)'] = 'admin/Admin/update_product/$1';

// HOMEPAGE

$route['anasayfa'] = 'Homepage';
$route['hakkimizda'] = 'Homepage/about';
$route['galerimiz'] = 'Homepage/gallery';
$route['sertifikalarimiz'] = 'Homepage/certificate';
$route['urunlerimiz'] = 'Homepage/products';
$route['urun-detay/(:any)'] = 'Homepage/product_detail/$1';
$route['iletisim'] = 'Homepage/contact';
$route['sozlesmeler/(:any)'] = 'Homepage/contracts/$1';