<?
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */


// Параметры для подключения
$db_host = "localhost"; 
$db_user = "cf97289_zen"; // Логин БД
$db_password = "vzmX9MnG"; // Пароль БД
$db_name = "cf97289_zen"; // Имя Таблицы БД
$db_table = "anketa"; // Имя Таблицы БД
 
// Подключение к базе данных
$db = mysqli_connect($db_host,$db_user,$db_password,$db_name) OR DIE("Не могу создать соединение ");
 
// Выборка базы
mysqli_select_db("cf97289_zen",$db);
 
// Установка кодировки соединения
mysqli_query("SET NAMES 'utf8'",$db);



// Переменные с формы
$surname = $_POST['surname'];


$query = "INSERT INTO ".$db_table." (`surname`) VALUES ('$surname')";


if($surname) {

    $result = mysqli_query($db, $query);
}

?>