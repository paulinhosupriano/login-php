<?php
ob_start();
session_start();

define('AUTENTICATION', [
    'email' => 'admin@admin.com',
    'senha' => 'admin'
]);

define('URI', 'https://localhost/login-php');
define('DS', DIRECTORY_SEPARATOR);
define('PATH', __DIR__);

require_once(PATH . DS . 'vendor/autoload.php');
