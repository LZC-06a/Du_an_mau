<?php

define('BASE_URL',      'http://du_an_mau.test/D-n-m-u/base-duanmau/');
define('BASE_URL_ADMIN', 'http://du_an_mau.test/D-n-m-u/base-duanmau/?mode=admin');

define('PATH_ROOT',         __DIR__ . '/../');

define('PATH_VIEW_CLIENT',         PATH_ROOT . 'views/client/');
define('PATH_VIEW_ADMIN',         PATH_ROOT . 'views/admin/');


define('PATH_VIEW_CLIENT_MAIN',    PATH_ROOT . 'views/client/main.php');
define('PATH_VIEW_MAIN',    PATH_ROOT . 'views/admin/main.php');
define('PATH_VIEW_ADMIN_MAIN', PATH_ROOT . 'views/admin/main.php');


define('BASE_ASSETS_UPLOADS',   BASE_URL . 'assets/uploads/');

define('PATH_ASSETS_UPLOADS',   PATH_ROOT . 'assets/uploads/');

define('PATH_CONTROLLER_ADMIN',       PATH_ROOT . 'controllers/admin/');
define('PATH_CONTROLLER_CLIENT',       PATH_ROOT . 'controllers/client/');

define('PATH_MODEL',            PATH_ROOT . 'models/');

// Tài khoản admin demo (có thể thay bằng dữ liệu từ CSDL)
define('ADMIN_EMAIL', 'admin@example.com');
define('ADMIN_PASSWORD', '123456');

define('DB_HOST',     'localhost');
define('DB_PORT',     '3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME',     'hoaldph59447_web2041.03');
define('DB_OPTIONS', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);
