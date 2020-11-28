<?php

// Định nghĩa hằng Path của file index.php

define('PATH_ROOT', __DIR__);
define("Base_URL","http://localhost/adminWE/");
// Autoload class trong PHP
spl_autoload_register(function (string $class_name) {
    include_once PATH_ROOT . '/' . $class_name . '.php';
});
// Lấy url hiện tại của trang web. Mặc định la /
$request_url = !empty($_GET['url']) ? '/' . $_GET['url'] : '/';
// Lấy phương thức hiện tại của url đang được gọi. (GET | POST). Mặc định là GET.
$method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
$router = new Route();
$router->get('/', 'HomeController@index');
$router->get('/dashboard','HomeController@dashboard');
$router->post('/login',"HomeController@login");
/////////////////////////////////////////////
$router->get('/add',"AddController@view");
$router->post('/add/upload',"AddController@addProduct");
//////////////////////////////////////////////////////
$router->get("/edit/{type}/{page}","EditController@page");
$router->get('/edit/{type}',"EditController@type");
///////////////////////////////////////////////////////
$router->get("/delete","DeleteController@view");
$router->get("/delete/{type}/{page}","DeleteController@page");
$router->get('/delete/{type}',"DeleteController@type");
/////////////////////////////////////////////////
$router->get('/admin/changePass',"AdminController@changePass");
$router->get("/admin/addAccount","AdminController@addAccount");
$router->get('/logout','AdminController@logout');
////////////////////////////////////
$router->get("/product/{pid}","ProductController@edit");
//////////////////////////////////
$router->post("/search","SearchController@search");
$router->post("/search/{page}","SearchController@search");
// $router->get("/test/{id}","EditController@test");
$router->map($request_url,$method_url);
?>
