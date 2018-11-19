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

    
header('Content-Encoding: UTF-8');
header('Content-Type: application/csv;charset=UTF-8');
header('Content-Disposition: attachment; filename="export.csv";');
echo "\xEF\xBB\xBF"; // UTF-8 BOM



    $sql = "SELECT * FROM " . $db_table;
    
    $result = $db->query($sql);

    
    $fp = fopen('php://output', 'w');  // Открываем поток для записи

    while($row = $result->fetch_assoc()) {  // Перебираем строки
        fputcsv($fp, $row, ";");  // Записываем строки в поток
    }
    



?>



