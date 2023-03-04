<?php defined('INDEX') OR die('Прямой доступ к странице запрещён!');

// MYSQL
class MyDB
{
var $dblogin = "root"; //логин к БД
var $dbpass = ""; // пароль к БД
var $db = "kostroma_fastfood"; //название БД
var $dbhost="localhost";

var $mysqli;
var $result;

function connect() {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
    $mysqli = new mysqli($this->dbhost, $this->dblogin, $this->dbpass, $this->db); // коннект с сервером бд
    $mysqli->set_charset("utf8mb4"); // задаем кодировку
    
    $result = $mysqli->query('SELECT * FROM `test_table`'); // запрос на выборку
    while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
    {
        echo '<p>ID='.$row['index'].'. Заказ: '.$row['name'],', ' .$row['place'], ', ' .$row['date'].'</p>';// выводим данные
    }
}
}