<?php session_start();
echo 'Оформленные заказы:';
define("INDEX", ""); // УСТАНОВКА КОНСТАНТЫ ГЛАВНОГО КОНТРОЛЛЕРА
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once($_SERVER[DOCUMENT_ROOT]."core.php"); // ПОДКЛЮЧЕНИЕ ЯДРА

// ПОДКЛЮЧЕНИЕ К БД
$db = new MyDB();
$db->connect();

echo '<a href="/order.php" class="button beer-button-blue">Оформить заказ</a>';