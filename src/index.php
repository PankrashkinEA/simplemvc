<?php
session_start();
// var_dump($_SESSION['name']);
// Работа с регулярками
// $string = '21-11-2015';
// $pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
// $replacement = 'Month $2, Day $1, Year $3';
// echo preg_replace($pattern, $replacement,$string);
// die;

// FRONT CONTROLLER



// 1. Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));

include_once 'autoloader.php';

// 3. Установка соединения с бд



// 4. Вызов Router

$router = new Router();
$router->isSession();
$router->run();
