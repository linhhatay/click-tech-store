<?php

use App\App;
use App\Config;
use App\Container;
use App\Controllers\AuthController;
use App\Router;
use App\Controllers\HomeController;
use App\Controllers\CategoryController;
use App\Controllers\ProductController;

require_once __DIR__ . './../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$container = new Container();
$router  = new Router($container);


// Xử lý đường dẫn truy cập web (web root)
$web_root = $_SERVER['SCRIPT_NAME']; // Lấy đường dẫn của tệp hiện tại (index.php) trên máy chủ web
$web_root = dirname($web_root); // Lấy thư mục chứa tệp hiện tại (loại bỏ tên tệp)
$web_root = str_replace('\\', '/', $web_root); // Chuyển đổi dấu gạch chéo ngược thành dấu gạch chéo thuận (nếu cần)

// Định nghĩa hằng số _WEB_ROOT chứa đường dẫn truy cập web hoàn chỉnh
define('_WEB_ROOT', $web_root);
define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');
define('RESOURCES_PATH', __DIR__ . '/../resources');
define('ADMIN_PATH', VIEW_PATH . '/admin');
define('CLIENT_PATH', VIEW_PATH . '/client');

// URL Route
define('PRODUCT_URL', _WEB_ROOT . '/product');
define('ADD_PRODUCT_URL', _WEB_ROOT . '/product/create');
define('EDIT_PRODUCT_URL', _WEB_ROOT . '/product/edit');
define('DELETE_PRODUCT_URL', _WEB_ROOT . '/product/delete');

define('ADD_CATEGORIES_URL', _WEB_ROOT . '/categories/create');


$router
    ->get(
        _WEB_ROOT,
        [HomeController::class, 'index']
    )->get(
        _WEB_ROOT . 'admin/product',
        [ProductController::class, 'index']
    )->get(
        _WEB_ROOT . '/product/create',
        [ProductController::class, 'create']
    )->post(
        _WEB_ROOT . '/product/store',
        [ProductController::class, 'store']
    )->patch(
        _WEB_ROOT . '/product/store',
        [ProductController::class, 'store']
    )->delete(
        _WEB_ROOT . '/product/{id}',
        [ProductController::class, 'destroy']
    );

$router
    ->get(
        _WEB_ROOT . '/categories',
        [CategoryController::class, 'index']
    )->get(
        _WEB_ROOT . '/categories/create',
        [CategoryController::class, 'create']
    )->post(
        _WEB_ROOT . '/categories/store',
        [CategoryController::class, 'store']
    );

// Route login
$router
    ->get(
        _WEB_ROOT . '/tai-khoan',
        [AuthController::class, 'index']
    )->post(
        _WEB_ROOT . '/tai-khoan',
        [AuthController::class, 'login']
    );

$router
    ->get(
        _WEB_ROOT . '/{slug}',
        [ProductController::class, 'show']
    );

// echo '<pre>';
// var_dump($router->routes());
// echo '</pre>';

(new App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_POST['_method'] ?? $_SERVER['REQUEST_METHOD']],
    new Config($_ENV)
))->run();
