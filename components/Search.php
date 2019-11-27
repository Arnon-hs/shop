<?php
$q = $_GET[""]; // на входе получаем переменную term
$q = str_replace(array("'","\""), "", $q); //убираем возможные служебные символы
$db=Db::getConnection();
  
$list = $db->getAll("SELECT name FROM product WHERE upper(name) LIKE upper('%?p%') GROUP BY name", $q); // делаем запрос к базе
if (count($list)>1) { // если массив данных содержит более 1 записи, то мы ее выдаем
echo json_encode($list); // конвертируем массив данных в формат JSON
}
?>