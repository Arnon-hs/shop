<?php
// $q = $_GET[""]; // на входе получаем переменную term
// $q = str_replace(array("'","\""), "", $q); //убираем возможные служебные символы

  


echo "aaaaaa";

// get the q parameter from URL
$q = $_REQUEST["q"];

$db=Db::getConnection();
$a = $db->getAll("SELECT name FROM product WHERE upper(name) GROUP BY name", $q); // делаем запрос к базе
// if (count($a>1) { // если массив данных содержит более 1 записи, то мы ее выдаем
// echo json_encode($a); // конвертируем массив данных в формат JSON
// }

print_r($a);
$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>